<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Penawaran;
use App\User;
use Validator;
use DB;

class PenawaranController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('penawaran')
                ->join('m_penawaran_status', 'penawaran.status', '=', 'm_penawaran_status.id')
                ->join('users as pemberi', 'penawaran.pemberi', '=', 'pemberi.id')
                ->join('users as penerima', 'penawaran.penerima', '=', 'penerima.id')
                ->select('penerima.nama as penerima','m_penawaran_status.status_tawar as status')
                ->where('penawaran.pemberi','=', $userlogin->id)
                ->whereIn('penawaran.status',[0,2])
                ->get();
//        dd($query);
        return view('karma.penawaran.index', ['data' => $query]);
    }
    
    public function ditawari(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('penawaran')
                ->join('m_penawaran_status', 'penawaran.status', '=', 'm_penawaran_status.id')
                ->join('users as pemberi', 'penawaran.pemberi', '=', 'pemberi.id')
                ->join('users as penerima', 'penawaran.penerima', '=', 'penerima.id')
                ->select('pemberi.nama as pemberi','m_penawaran_status.status_tawar as status','penawaran.status as status_id','penawaran.id as id')
                ->where('penawaran.penerima','=', $userlogin->id)
                ->whereIn('penawaran.status',[0,2])
                ->get();
        
        $penawaran = Penawaran::where('penerima','=',$userlogin->id)->first();
        
        $data = [
                'data' => $query,
                'member_tipe' => $userlogin->member_tipe,
                'user_id' => $userlogin->id,
                'ditawari' => $penawaran,
            ];
        return view('karma.penawaran.ditawari', $data);
    }

    public function terima($id_penawaran) {
        
        $penawaran = Penawaran::find($id_penawaran);
        $user = User::find($penawaran->penerima);
        if($user->member_tipe == 5){
            return redirect('invoice/create/'.$user->id);
        }
        
        if($user->member_tipe == 4){
            return redirect('namatokoform/'.$id_penawaran);
        }
        
        $penawaran->status = 1;
        $penawaran->save();
        
        $user->member_tipe = $user->member_tipe - 1;
        
        
        $user->save();
        return redirect('penawaran');
    }
    
    public function tolak($id) {
        
        $penawaran = Penawaran::find($id);
        $penawaran->status = 11;
        $penawaran->save();
        
        return redirect('penawaran');
        
    }
    
    public function namatokoform($id_penawaran) {
       
        $data = ['id_penawaran' => $id_penawaran];
        
       return view('karma.penawaran.namatokoform', $data);
        
    }

    public function namatoko(Request $request) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
            'namatoko' => 'required|max:100',
            'id_penawaran' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('namatokoform/'.$request->id_penawaran)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $namaExist = User::where('toko','=',$request->namatoko)->first();
        if ($namaExist) {
            return redirect('namatokoform/'.$request->id_penawaran)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $penawaran = Penawaran::find($request->id_penawaran);
        $user = User::find($penawaran->penerima);
        $penawaran->status = 1;
        $penawaran->save();
        
        $user->member_tipe = $user->member_tipe - 1;
        $user->toko = $request->namatoko;
        $user->save();
        return redirect('penawaran');
    }

    public function show($id) {
        abort(404);
    }

    public function edit($id) {
        abort(404);
    }

    public function update(Request $request, $id) {
        abort(404);
    }

    public function destroy($id) {
        abort(404);
    }

}
