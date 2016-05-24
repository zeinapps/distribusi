<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Barang;
use App\Stok;

class BarangController extends Controller {

    public function index(Request $request) {

        $query = DB::table('barang')
                ->join('m_kategori', 'barang.kategori', '=', 'm_kategori.k_id')
                ->get();
        $data = ['data' => $query];
//        dd($data);
        return view('karma.barang.index', $data);
    }

    public function create() {
        $kategori = DB::table('m_kategori')->get();
        $data['data']['kategori'] = $kategori;
        $data['upload_url'] = route('upload_order');
        return view('karma.barang.create', $data);
    }

    public function store(Request $request) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'kategori' => 'required|numeric',
            'harga' => 'required|numeric',
            'pf' => 'required|numeric',
            'pv' => 'required|numeric',
            'image_url' => 'url',
            'satuan' => 'required|max:100',
        ]);

//        dd($request->kategori);
        if ($validator->fails()) {
            return redirect('barang/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = new Barang;
        $query->nama = $request->nama;
        $query->kategori = $request->kategori;
        $query->satuan = $request->satuan;
        $query->harga = $request->harga;
        $query->pf = $request->pf;
        $query->pv = $request->pv;
        $query->image_url = $request->image_url?$request->image_url:null;
        $query->created_at = time();
        $query->updated_at = time();
        
        $query->save();
        
        $stok = new Stok;
        $stok->barang_id = $query->id;
        $stok->user_id = $userlogin->id;
        $stok->stok = 0;
        $stok->save();
        
        return redirect('barang');
    }

    public function show($id) {
        $query = DB::table('barang')
                ->join('m_kategori', 'barang.kategori', '=', 'm_kategori.k_id')
                ->where('id',$id)
                ->first();
        
        return view('karma.barang.show', ['data' => $query ]);
    }

    public function edit($id) {
        $query = Barang::find($id);
        $data = ['data' => $query];
        $kategori = DB::table('m_kategori')->get();
        $data['data']['kategoriall'] = $kategori;
        $data['upload_url'] = route('upload_order');
        return view('karma.barang.edit', $data);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'kategori' => 'required|numeric',
            'harga' => 'required|numeric',
            'satuan' => 'required|max:100',
            'pf' => 'required|numeric',
            'pv' => 'required|numeric',
            'image_url' => 'url',
        ]);

        if ($validator->fails()) {
            return redirect('barang/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = Barang::find($id);
        $query->nama = $request->nama;
        $query->kategori = $request->kategori;
        $query->satuan = $request->satuan;
        $query->harga = $request->harga;
        $query->pf = $request->pf;
        $query->pv = $request->pv;
        if($request->image_url){
            $query->image_url = $request->image_url;
        }
        $query->updated_at = time();
        $query->save();
        return redirect('barang/'.$id);
    }

    public function destroy($id) {
        abort(404);
    }

}
