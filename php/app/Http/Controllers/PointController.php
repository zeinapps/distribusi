<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PointController extends Controller {

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
        
        $data = ['data' => $userlogin];
        return view('karma.point.show', $data);
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
