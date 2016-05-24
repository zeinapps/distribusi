<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Mkategori;

class KategoriController extends Controller {

    public function index(Request $request) {

        $query = DB::table('m_kategori')->get();
        
        return view('karma.kategori.index', ['data' => $query]);
    }

    public function create() {
        return view('karma.kategori.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('kategori/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = new Mkategori;
        $query->k_nama = $request->nama;
        $query->save();
        return redirect('kategori');
    }

    public function show($id) {
        $query = Mkategori::find($id);
        return view('karma.kategori.show', ['data' => $query->toArray()]);
    }

    public function edit($id) {
        $query = Mkategori::find($id);
        return view('karma.kategori.edit', ['data' => $query->toArray()]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('kategori/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = Mkategori::find($id);
        $query->k_nama = $request->nama;
        $query->save();
        return redirect('kategori/'.$id);
    }

    public function destroy($id) {
        abort(404);
    }

}
