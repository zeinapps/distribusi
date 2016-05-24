<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Msetting;

class SettingController extends Controller {

    public function index(Request $request) {

        $query = DB::table('m_setting')->get();
        
        return view('karma.setting.index', ['data' => $query]);
    }

    public function create() {
        return view('karma.setting.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'value' => 'required|max:100',
            'keterangan' => 'max:200',
        ]);

        if ($validator->fails()) {
            return redirect('setting/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = new Msetting;
        $query->s_value = $request->value;
        $query->s_ket= $request->keterangan?$request->keterangan:'';
        $query->save();
        return redirect('setting');
    }

    public function show($id) {
        $query = Msetting::find($id);
        
        return view('karma.setting.show', ['data' => $query->toArray() ]);
    }

    public function edit($id) {
        $query = Msetting::find($id);
        $date = date('Y-m-d',$query->expired) ;
        $query->expired = $date;
        $is_diskon = false; 
        if(substr($query->s_nama, 0, 6) == 'diskon') $is_diskon = true;
        return view('karma.setting.edit', ['data' => $query->toArray(),'is_diskon' => $is_diskon]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'value' => 'required|max:100',
            'keterangan' => 'max:200',
        ]);

        if ($validator->fails()) {
            return redirect('setting/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $query = Msetting::find($id);
        $query->s_value = $request->value;
        $query->s_ket= $request->keterangan?$request->keterangan:'';
        $query->expired = strtotime($request->expired?$request->expired:0);
        $query->save();
        return redirect('setting/'.$id);
    }

    public function destroy($id) {
        abort(404);
    }

}
