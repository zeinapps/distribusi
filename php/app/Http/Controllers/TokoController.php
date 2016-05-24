<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Barang;
use App\User;
use App\Orderdetailtmp;
use App\Terbilang;

class TokoController extends Controller {

    public function index(Request $request,$toko) {
        $query = DB::table('stok')
                ->join('users', 'stok.user_id', '=', 'users.id')
                ->join('barang', 'stok.barang_id', '=', 'barang.id')
                ->where('users.toko','=',$toko)
                ->select('barang.*','stok.stok')
                ->paginate(5);
        
        
        $data = [
            'data' => $query->items(),
            'toko' => $toko,
            'pagination' => $query,
            ];
        return view('karma.toko.index', $data);
    }

    public function create() {
        abort(404);
    }

    public function store(Request $request) {
        abort(404);
    }

    public function show($toko,$id) {
        $query = DB::table('stok')
                ->join('users', 'stok.user_id', '=', 'users.id')
                ->join('barang', 'stok.barang_id', '=', 'barang.id')
                ->where('users.toko','=',$toko)
                ->where('barang.id','=',$id)
                ->select('barang.*','stok.stok')
                ->first();
        $data = [
            'data' => $query,
            'toko' => $toko];
        return view('karma.toko.detil',$data);
    }
    
    public function order(Request $request, $toko) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
            'barang_id' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect("toko/$toko/$request->barang_id")
                        ->withErrors($validator)
                        ->withInput();
        }
        
//        if($odrtmp = Orderdetailtmp::where('user_id','=',$userlogin->id)->first()){
//            return redirect("order/create")
//                        ->withErrors(['Anda bisa order lagi setelah menyelesaikan order berikut'])
//                        ->withInput();
            
//        }else{
            
            $user_agen = User::where('toko','=',$toko)->first();
            
            $query = new Orderdetailtmp;
            $query->barang_id = $request->barang_id;
            $query->jumlah = $request->jumlah;
            $barang = Barang::find($request->barang_id);
            $harga = $barang->harga;
            $query->harga = $harga;
            $query->user_id = $userlogin->id;
            $query->user_agen = $user_agen->id;
            $query->save();
//        }
        
        
        
        return redirect('order/create');
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
