<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $query = DB::table('users')
                ->join('m_membertipe', 'users.member_tipe', '=', 'm_membertipe.id')
                ->select('users.*','m_membertipe.nama as membernama');
                
        $query = $query->where('member_tipe', '>', $userlogin->member_tipe);
        
//        if($userlogin->member_tipe != 1){
//            $query = $query->where('parent_user', $userlogin->id);
//        }
        $query = $query->get();
        $data = [];
        foreach ($query as $value) {
            
            $value->icon = '/images/'.$value->member_tipe.'.png';
            
            $data [] = $value;
        }
        
        return view('karma.index', ['data' => $data]);
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
        abort(404);
    }

    public function update(Request $request, $id) {
        abort(404);
    }

    public function destroy($id) {
        abort(404);
    }

}
