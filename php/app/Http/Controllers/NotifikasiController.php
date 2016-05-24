<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Notifikasi;
use App\User;

class NotifikasiController extends Controller {

    public function index(Request $request) {
        $userlogin = $request->user();
        $notifikasi = Notifikasi::where('user_id',$userlogin->id)
                ->where('status', 0)
                ->get();
        $member = User::where('member_tipe',5)->get();
        $data = [
            'notif' => $notifikasi,
            'member' => $member,
            ];
        return view('karma.notifikasi.index', $data);
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
        Notifikasi::where('id', $id)
                ->update([
                    'status' => 1,
        ]);
        return redirect('notifikasi');
    }

    public function destroy($id) {
        abort(404);
    }

}
