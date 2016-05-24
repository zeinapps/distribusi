<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Msetting;
use App\Order;
use App\Orderdetail;
use App\Stok;
use App\Barang;
use App\User;
use Validator;
use App\ConfirmOrder;

class OrderjualController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('order')
                ->join('m_order_status', 'order.status_id', '=', 'm_order_status.id')
                ->join('users', 'order.user_agen', '=', 'users.id')
                ->select('order.id','order.user_order','order.user_agen','order.time','order.status_id','order.nilai',
                        'm_order_status.nama as status',
                        'users.nama as agen')
                ->where('order.user_agen','=',$userlogin->id)
                ->orderBy('order.id', 'desc')
                ->get();
        
        
        $data = ['data' => $query];
        return view('karma.jual.index', $data);
    }

    public function verify(Request $request,$id) {
        $userlogin = $request->user();
        $order = Order::find($id);
        $orderdetails = Orderdetail::where('order_id','=',$id)->get();
        
        $cekStok = [];
        foreach ($orderdetails as $orderdetail) {
            $stok =  Stok::where('barang_id','=',$orderdetail->barang_id)
                    ->where('user_id','=',$userlogin->id)->first();
            if($stok){
                if(!($stok->stok >= $orderdetail->jumlah) ){
                    $cekStok[] = 'Stok dari barang id = '.$orderdetail->barang_id." tidak mencukupi";
                }
            }else{
                $cekStok[] = 'Stok dari barang id = '.$orderdetail->barang_id." tidak mencukupi";
            }
            
        }
        
        if($cekStok){
            return redirect('jual')
                        ->withErrors($cekStok)
                        ->withInput();
        }
        
        foreach ($orderdetails as $orderdetail) {
            //stok agen berkurang
            $stok = Stok::where('barang_id','=',$orderdetail->barang_id)
                    ->where('user_id','=',$userlogin->id)->first();
            $currentstok = $stok->stok;
            $update = Stok::find($stok->id);
            $update->stok =  $currentstok - $orderdetail->jumlah;
            $update->save();
            
            
            //stok anggota tambah;
            $stok = Stok::where('barang_id','=',$orderdetail->barang_id)
                    ->where('user_id','=',$order->user_order)->first();
            $currentstok = 0;
            if($stok){
                $currentstok = $stok->stok;
                $update = Stok::find($stok->id);
                $update->stok =  $currentstok + $orderdetail->jumlah;
                $update->save();
            }else{
                $update = new Stok();
                $update->barang_id = $orderdetail->barang_id;
                $update->user_id = $order->user_order;
                $update->stok =  $currentstok + $orderdetail->jumlah;
                $update->save();
            }
            
            //update poin user
            $poin_barang = Barang::find($orderdetail->barang_id)->pf * $orderdetail->jumlah;
            
            $user = User::find($order->user_order);
            if($user->member_tipe != 5){
                $current_poin = $user->poin;
                $user->poin = $current_poin + $poin_barang;
                $user->save();
            }
        }
        
        
        $order->status_id = 2;
        $order->save();
        return redirect('jual');
        
    }

    public function store(Request $request) {
        abort(404);
    }

    public function show($id) {
        $query = Order::find($id);
        $query->tgl = date ('Y-m-d',$query->time);
        $query->detail = Orderdetail::where('order_id','=',$id)->get();
        
        $confirm = ConfirmOrder::where('orderid',$id)->first();
        if($confirm){
            $confirm->waktu = date ('Y-m-d',$confirm->waktu);
        }
        
        
        $data = ['data' => $query,
            'confirm' => $confirm];
        return view('karma.jual.show', $data);
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
