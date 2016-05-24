<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Mlokasi;

class LokasiController extends Controller {

    public function index(Request $request) {

        $query = DB::table('m_lokasi')->get();
        
        return view('karma.lokasi.index', ['data' => $query]);
    }

    public function create() {
        return view('karma.lokasi.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('lokasi/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = new Mlokasi;
        $query->l_nama = $request->nama;
        $query->save();
        return redirect('lokasi');
    }

    public function show($id) {
        $query = Mlokasi::find($id);
        return view('karma.lokasi.show', ['data' => $query->toArray()]);
    }

    public function edit($id) {
        $query = Mlokasi::find($id);
        return view('karma.lokasi.edit', ['data' => $query->toArray()]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('lokasi/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = Mlokasi::find($id);
        $query->l_nama = $request->nama;
        $query->save();
        return redirect('lokasi/'.$id);
    }

    public function destroy($id) {
        abort(404);
    }

}
