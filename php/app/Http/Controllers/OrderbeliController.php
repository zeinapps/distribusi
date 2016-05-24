<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Orderdetailtmp;
use App\Order;
use App\Orderdetail;
use App\Barang;
use App\User;
use App\Msetting;
use App\ConfirmOrder;
use Validator;

class OrderbeliController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('order')
                ->join('m_order_status', 'order.status_id', '=', 'm_order_status.id')
                ->join('users', 'order.user_agen', '=', 'users.id')
                ->select('order.id','order.user_order','order.user_agen','order.time','order.status_id','order.nilai',
                        'm_order_status.nama as status',
                        'users.nama as agen')
                ->where('order.user_order','=',$userlogin->id)
                ->orderBy('order.id', 'desc')
                ->get();
        
        
        $data = ['data' => $query];
        return view('karma.order.index', $data);
    }

    public function create(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('order_detail_tmp')
                ->join('barang','order_detail_tmp.barang_id','=','barang.id')
                ->select('order_detail_tmp.id','order_detail_tmp.user_agen','order_detail_tmp.barang_id','order_detail_tmp.jumlah','order_detail_tmp.harga as harga',
                        'barang.nama')
                ->where('order_detail_tmp.user_id' ,'=',$userlogin->id)
                ->orderBy('order_detail_tmp.id', 'desc')
                ->get();
        $toko = 'admin';
        if($query && $aa = User::find($query[0]->user_agen)){
            $toko = $aa->toko;
        }
        
        $data = ['data' => $query,
            'toko' => $toko];
        $data['upload_url'] = route('upload_order');
        return view('karma.order.create', $data);
    }

    public function storetmp(Request $request) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
            'barang_id' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('order/tmp/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        if(Orderdetailtmp::where('barang_id','=',$request->barang_id)
                ->where('user_id','=',$userlogin->id)->first()){
            $barang = Barang::find($request->barang_id);
            $harga = $barang->harga;
            Orderdetailtmp::where('barang_id','=',$request->barang_id)
                ->where('user_id','=',$userlogin->id)
                ->update(['jumlah' => $request->jumlah,
                'harga' => $harga]);
        }else{
            $query = new Orderdetailtmp;
            $query->barang_id = $request->barang_id;
            $query->jumlah = $request->jumlah;
            $barang = Barang::find($request->barang_id);
            $harga = $barang->harga;
            $query->harga = $harga;
            $query->user_id = $userlogin->id;
            $query->save();
        }
        
        return redirect('order/create');
    }
    
    public function tambahform(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('barang')
                ->get();
        
        $data = ['data' => $query];
        $query['upload_url'] = route('upload');
        return view('karma.order.tambah', $data);
    }
    
    public function confirm(Request $request) {
        $userlogin = $request->user();
        $orderstmp = Orderdetailtmp::where('user_id','=',$userlogin->id)
                ->get();
        
        if(!$orderstmp->toArray()){
            return redirect('order/create')
                        ->withErrors(['Tidak memiliki order beli'])
                        ->withInput();
        }
        return view('karma.order.confirm');
    }
    
    public function store(Request $request) {
        $userlogin = $request->user();
        
        $validator = Validator::make($request->all(), [
            'bank' => 'required',
            'nomer_rekening' => 'required',
            'nama_pemilik' => 'required',
            'bank' => 'required',
            'jumlah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('order/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $orderstmp = Orderdetailtmp::where('user_id','=',$userlogin->id)
                ->get();
        
        if(!$orderstmp->toArray()){
            return redirect('order')
                        ->withErrors(['Tidak memiliki order beli'])
                        ->withInput();
        }
      
        $nilai = 0;
        foreach ($orderstmp as $ordertmp) {
            $nilai += $ordertmp->harga * $ordertmp->jumlah;
        }
        $diskon = 0;
        if($userlogin->member_tipe == 5){
            $set_diskon = Msetting::where('s_nama','=','diskon member')->first();
            if($set_diskon->expired >= time()) $diskon = $nilai * $set_diskon->s_value * 0.01;
        }else if($userlogin->member_tipe == 4){
            $set_diskon = Msetting::where('s_nama','=','diskon agen')->first();
            if($set_diskon->expired >= time()) $diskon = $nilai * $set_diskon->s_value * 0.01;
        }else if($userlogin->member_tipe == 3){
            $set_diskon = Msetting::where('s_nama','=','diskon distributor')->first();
            if($set_diskon->expired >= time()) $diskon = $nilai * $set_diskon->s_value * 0.01;
        }else if($userlogin->member_tipe == 2){
            $set_diskon = Msetting::where('s_nama','=','diskon stokist')->first();
            if($set_diskon->expired >= time()) $diskon = $nilai * $set_diskon->s_value * 0.01;
        }
        $time_waktu = time();
        $order = new Order;
        $order->user_order = $userlogin->id;
        $order->user_agen = $orderstmp[0]->user_agen?$orderstmp[0]->user_agen:$userlogin->parent_user;
        $order->time = $time_waktu;
        $order->nilai = $nilai;
        $order->diskon = $diskon;
        $order->upload_url = $request->bukti_bayar;
        $order->save();
        
        foreach ($orderstmp as $ordertmp) {
            $orderdetail = new Orderdetail;
            $orderdetail->order_id = $order->id;
            $orderdetail->barang_id = $ordertmp->barang_id;
            $orderdetail->jumlah = $ordertmp->jumlah;
            $orderdetail->harga = $ordertmp->harga;
            $orderdetail->save();
        }
        
        $confirm = new ConfirmOrder;
        $confirm->orderid = $order->id;
        $confirm->bank = $request->bank;
        $confirm->nomer_rekening = $request->nomer_rekening;
        $confirm->nama_pemilik = $request->nama_pemilik;
        $confirm->jumlah = $request->jumlah;
        $confirm->waktu = $time_waktu;
        $confirm->save();
        Orderdetailtmp::where('user_id','=',$userlogin->id)->delete();
        return redirect('order');
    
    }
    
    public function storepoin(Request $request) {
        $userlogin = $request->user();
        
        $orderstmp = Orderdetailtmp::where('user_id','=',$userlogin->id)
                ->get();
        
        if(!$orderstmp->toArray()){
            return redirect('order')
                        ->withErrors(['Tidak memiliki order beli'])
                        ->withInput();
        }
        
        $poin_order = 0;
        foreach ($orderstmp as $ordertmp) {
            $poin_order += Barang::find($ordertmp->barang_id)->pf * $ordertmp->jumlah;
        }
        
        if($userlogin->poin < $poin_order){
            return redirect('order')
                        ->withErrors(["Poin yang dibutuhkan $poin_order, poin Anda $userlogin->poin,  "])
                        ->withInput();
        }
      
        $userorder = User::find($userlogin->id);
        $userorder->poin = $userlogin->poin - $poin_order;
        $userorder->save();
        
        $nilai = 0;
        foreach ($orderstmp as $ordertmp) {
            $nilai += $ordertmp->harga;
        }
        $order = new Order;
        $order->user_order = $userlogin->id;
        $order->user_agen = $userlogin->parent_user;
        $order->time = time();
        $order->nilai = $nilai;
        $order->order_poin = 1;
        $order->save();
        
        foreach ($orderstmp as $ordertmp) {
            $orderdetail = new Orderdetail;
            $orderdetail->order_id = $order->id;
            $orderdetail->barang_id = $ordertmp->barang_id;
            $orderdetail->jumlah = $ordertmp->jumlah;
            $orderdetail->harga = $ordertmp->harga;
            $orderdetail->save();
        }
        
        Orderdetailtmp::where('user_id','=',$userlogin->id)->delete();
        return redirect('order');
    
    }

    public function batal(Request $request) {
        $userlogin = $request->user();
        Orderdetailtmp::where('user_id','=',$userlogin->id)->delete();
        return redirect('order');
    }
    
    public function show($id) {
        $query = Order::find($id);
        $query->tgl = date ('Y-m-d',$query->time);
        $query->detail = Orderdetail::where('order_id','=',$id)->get();
        $data = ['data' => $query];
        return view('karma.order.show', $data);
    }

    public function edit($id) {
        abort(404);
    }
    
   

    public function update(Request $request, $id) {
        abort(404);
    }

    public function destroytmp($id) {
        Orderdetailtmp::find($id)->delete();
        return redirect('order/create');
    }

}
