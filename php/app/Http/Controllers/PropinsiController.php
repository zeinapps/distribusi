<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PropinsiController extends Controller {

    public function index(Request $request) {
        abort(404);
    }

    public function provinsi() {
        $query = DB::table('m_provinsi')->get();
        return $this->SendData($query);
    }
    
    public function kabupaten($id_prov) {
        $query = DB::table('m_kabupaten')
                ->where('id_prov','=',$id_prov)->get();
        return $this->SendData($query);
    }
    
    public function kecamatan($id_kab) {
        $query = DB::table('m_kecamatan')
                ->where('id_kab','=',$id_kab)->get();
        return $this->SendData($query);
    }
    
    public function kelurahan($id_kec) {
        $query = DB::table('m_kelurahan')
                ->where('id_kec','=',$id_kec)->get();
        return $this->SendData($query);
    }

    public function store(Request $request) {
        abort(404);
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
