<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stok;
use DB;
use Validator;

class StokController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('stok')
                ->join('barang', 'stok.barang_id', '=', 'barang.id')
                ->select('stok.id','stok.barang_id','barang.nama','barang.satuan','stok.user_id','stok.stok')
                ->where('stok.user_id','=',$userlogin->id)
                ->get();
        
        $data = ['data' => $query,
            'member_tipe' => $userlogin->member_tipe];
        return view('karma.stok.index', $data);
    }

    public function create() {
        abort(404);
    }

    public function store(Request $request) {
        abort(404);
    }

    public function show($id) {
        abort(404);
    }

    public function edit($id) {
        $query = Stok::find($id);
        $data = ['data' => $query];
     
        return view('karma.stok.edit', $data);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'stok' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('stok/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        $query = Stok::find($id);
        $query->stok = $request->stok;
        $query->save();
        return redirect('stok');
    }

    public function destroy($id) {
        abort(404);
    }

}
