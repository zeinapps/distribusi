<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Order;
use App\User;
use App\Invoice;
use App\Msetting;
use App\Penawaran;
use App\Notifikasi;
use Mail;

class AnggotaController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('users')
                ->join('m_membertipe', 'users.member_tipe', '=', 'm_membertipe.id')
                ->where('parent_user', $userlogin->id)
                ->select('users.*','m_membertipe.nama as membernama')
                ->get();
        $data = [];
        $limit_member = Msetting::where('s_nama','=','limit member')->first()->s_value;
        $limit_pr = Msetting::where('s_nama','=','limit pr')->first()->s_value;
        $limit_trans_agen = Msetting::where('s_nama','=','limit transaksi agen')->first()->s_value;
        $limit_trans_distributor = Msetting::where('s_nama','=','limit transaksi distributor')->first()->s_value;
        $limit_trans_stokist = Msetting::where('s_nama','=','limit transaksi stokist')->first()->s_value;
        foreach ($query as $value) {
            $tawari = Penawaran::where('penerima','=',$value->id)
                    ->where('member_tipe','=',$value->member_tipe-1)
                    ->whereIn('status', [0, 1])
                    ->first();
            $value->jumlah_transaksi = DB::table('order')->where('user_order','=',$value->id)
                    ->where('status_id','=',2)->count();
            $pr_user = User::where('parent_user','=',$value->id)->count();
            
            $nilai_transaksi = 0;
            $order = Order::where('user_order','=',$value->id)->where('status_id','=',2)->get();
            
            foreach ($order as $va) {
                
                $nilai_transaksi += $va->nilai;
            }
            
            
            $value->tawari = false;
//             dd($value);
            if( $userlogin->member_tipe <= 3){
                if($value->member_tipe == 5 && 
                    $value->jumlah_transaksi >= 
                    $limit_member && 
                    !$tawari){
                    $value->tawari = true;
                } 
                
                if($value->member_tipe == 4 && $limit_trans_agen <= $nilai_transaksi && !$tawari){
                    $value->tawari = true;
                } 
//                if(39 == $value->id){
//                    dd($value);
//                }
                if($userlogin->id == 2 && $value->member_tipe == 3 && 
                    $limit_trans_distributor <= $nilai_transaksi && 
                    !$tawari){
                    $value->tawari = true;
                } 
            }
                    
            if($userlogin->member_tipe == 1 &&
                    $value->member_tipe == 2 && 
                    $limit_trans_stokist <= $nilai_transaksi && 
                    !$tawari){
                $value->tawari = true;
            }
            $data[] = $value;
        }
//        
        return view('karma.anggota.index', ['data' => $data]);
    }

    public function create() {
        return view('karma.anggota.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'email' => 'required|email|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('anggota/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        if (User::where('email', $request->email)->first()) {
            return redirect('anggota/create')
                            ->withErrors(array('Email ' . $request->email . ' telah terdaftar'))
                            ->withInput();
        }
        $userlogin = $request->user();
        
        if (!($userlogin->member_tipe == 3 || $userlogin->member_tipe == 2)) {
            return redirect('anggota/create')
                            ->withErrors(array('Anda tidak bisa menambah anggota karena bukan Stokist atau Distributor'))
                            ->withInput();
        }
        
        $parent = $userlogin->id;
//        dd();
        $aktivasi_token = $this->random_token();
        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->aktivasi_token = $aktivasi_token;
        $user->parent_user = $parent;
        $user->save();
        
//        dd($user);
//        $user = User::create([
//            'nama' => $request->nama,
//            'email' => $request->email,
//            'aktivasi_token' => $aktivasi_token,
//            'parent_user' => $parent,
////            'password' => bcrypt($request->password),
//        ]);

        $link = route('aktivasi').'/'.$aktivasi_token.'/ok';
        $data = [
            'link' => $link,
        ];
        Mail::send('email', $data, function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your Aktivation Link');
        });
        
        return redirect('anggota');
    }

    public function show($id) {
        $query = User::find($id);
        return view('karma.anggota.show', ['data' => $query->toArray()]);
    }

    public function nonverify(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('users')
                ->join('m_membertipe', 'users.member_tipe', '=', 'm_membertipe.id')
                ->join('penawaran', 'penawaran.penerima', '=', 'users.id')
                ->where('penawaran.status','=', 2)
                ->select('users.*','m_membertipe.nama as membernama')
                ->get();
        
        return view('karma.anggota.nonverify', ['data' => $query]);
    }
    
    public function verify(Request $request,$id) {
        $userlogin = $request->user();
        
        $invoice = Invoice::where('user_id','=',$id)->first();
        if($invoice){
            User::where('id','=',$id)
                ->update(['is_verify' => 1,'member_tipe' => 4]);
            Invoice::where('user_id','=',$id)->update(['status' => 1]);
            Penawaran::where('penerima','=',$id)
                ->update(['status' => 1]);
            $penawaran =  Penawaran::where('penerima','=',$id)->first();
            
            $user = User::where('id','=',$penawaran->pemberi)->first();
            $poin = $user->poin + Msetting::where('s_nama','=','prm')->first()->s_value;
            User::where('id','=',$penawaran->pemberi)->update(['poin' => $poin]);
            
            $usermember = User::where('id','=',$id)->first();
            
            $notif = new Notifikasi;
            $notif->user_id = $penawaran->pemberi;
            $notif->status = 0;
            $notif->notifikasi = 'Terima kasih! Atas Undangan Anda, Anggota dengan nama ' . $usermember->nama .' Telah terverifikasi menjadi priority member';
            $notif->save();

// bagi_hasil
            
            return redirect('nonverify');
        }
        
        
        return redirect('nonverify')
                        ->withErrors(['User Belum Bayar'])
                        ->withInput();
    }

    public function update(Request $request, $id) {
        abort(404);
    }

    public function destroy($id) {
        abort(404);
    }
    
    public function aktivasi($aktivasi_token){
        if ($user = User::where('aktivasi_token', $aktivasi_token)->first()) {
            User::where('aktivasi_token', $aktivasi_token)
                    ->update([
                        'aktivasi_token' => '',
            ]);
            return redirect('/updateuser/'.$user->id);
        } else {
            return view('karma.auth.notifikasi', ['data' =>
                array('title' => 'Aktifasi Gagal',
                    'deskripsi' => 'Token Aktifasi tidak dikenali atau sudah expired')
            ]);
        }
    }
    
    public function tawari(Request $request,$user_id) {
        $userlogin = $request->user();
        $penawaran = new Penawaran;
        $penawaran->pemberi = $userlogin->id;
        $penawaran->penerima = $user_id;
        $penawaran->status = 0;
        $penawaran->member_tipe = User::find($user_id)->member_tipe - 1;
        $penawaran->save();
        return redirect('anggota');
    }

}
