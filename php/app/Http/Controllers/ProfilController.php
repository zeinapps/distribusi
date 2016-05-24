<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\User;
use Mail;
use Config;
use Auth;

class ProfilController extends Controller {

    public function index(Request $request) {
        abort(404);
    }

    public function create() {
        abort(404);
    }

    public function store(Request $request) {
        abort(404);
    }

    public function show(Request $request) {
        $userlogin = $request->user();
        $query = User::find($userlogin->id);
        $query->propinsi = \App\Mprovinsi::find($query->id_prov)->nama_prov;
        $query->kabupaten = \App\Mkabupaten::find($query->id_kab)->nama_kab;
        $query->kecamatan = \App\Mkecamatan::find($query->id_kec)->nama_kec;
        $query->kelurahan = \App\Mkelurahan::find($query->id_kel)->nama_kel;
       
        return view('karma.profil.show', ['data' => $query->toArray()]);
    }

    public function kodeafiliasisaya(Request $request) {
        $userlogin = $request->user();
        $query = User::find($userlogin->id);
        return view('karma.profil.kodeafiliasi', ['data' => $query->toArray()]);
    }
    
    public function edit(Request $request) {
        $userlogin = $request->user();
        $query = User::find($userlogin->id);
        $data = ['data' => $query->toArray() ];
        $data['data']['host'] = Config::get('app.host');
        return view('karma.profil.edit', $data);
    }
    
    public function editavatar(Request $request) {
        $userlogin = $request->user();
        $query = User::find($userlogin->id);
        $data = ['data' => $query->toArray() ];
        $data['upload_url'] = route('upload_order');
        return view('karma.profil.avatar', $data);
    }
    
    public function editpassword(Request $request) {
        $userlogin = $request->user();
        return view('karma.profil.password');
    }
    
    public function update(Request $request) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
                    'nama' => 'required',
                    'alamat' => 'required',
                    'hp' => 'required',
                    'ktp' => 'required',
                    'lat' => 'required',
                    'long' => 'required',
                    'kode_pos' => 'numeric',
                    'tanggal_lahir' => 'required|date',
                    'tempat_lahir' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('profil/edit')
                            ->withErrors($validator)
                            ->withInput();
        }
        
        $source = $request->tanggal_lahir;
        $date = new \DateTime($source);
        
        User::where('id', $userlogin->id)
                ->update([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'hp' => $request->hp,
                    'ktp' => $request->ktp,
                    'ibu' => 'ibu',
                    'lat' => $request->lat,
                    'long' => $request->long,
                    'tanggal_lahir' => $date->format('Y-m-d'),
                    'tempat_lahir' => $request->tempat_lahir,
                    'kode_pos' => $request->kode_pos?$request->kode_pos:'',
                    'id_kel' => $request->id_kel?$request->id_kel:'',
                    'id_kec' => $request->id_kec?$request->id_kec:'',
                    'id_kab' => $request->id_kab?$request->id_kab:'',
                    'id_prov' => $request->id_prov?$request->id_prov:'',
        ]);
        return redirect('profil');
    }
    
    public function updatepassword(Request $request) {
        $userlogin = $request->user();
        $validator = Validator::make($request->all(), [
                    'password_lama' => 'required',
                    'password' => 'required|confirmed',
        ]);
        
        if ($validator->fails()) {
            return redirect('profil/edit/password')
                            ->withErrors($validator)
                            ->withInput();
        }
        
        $source = $request->tanggal_lahir;
        $date = new \DateTime($source);
        
        $credentials = [
            'email' => $userlogin->email,
            'password' => $request->password_lama
        ];
        if (!Auth::once($credentials)) {
            return redirect('profil/edit/password')
                            ->withErrors(['Salah password'])
                            ->withInput();
        }else{
            User::where('id', $userlogin->id)
                ->update([
                    'password' => bcrypt($request->password),
            ]);
        }
        
        return redirect('profil');
    }

    public function updateavatar(Request $request) {
        $userlogin = $request->user();
        User::where('id', $userlogin->id)
                ->update([
                    'avatar' => $request->avatar ?$request->avatar  : '',
        ]);
        return redirect('profil');
    }

    public function destroy($id) {
        abort(404);
    }
    
}
