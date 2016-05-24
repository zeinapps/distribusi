<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fileupload;
use Storage;
use File;

class UploadController extends Controller {

     public function upload(Request $request) {

        $file = $request->file('file');
        $content = File::get($file);
        $extension = $file->getClientOriginalExtension();
        $mime = $file->getMimeType();
        $time = time();
        $destinationPath = 'uploads/'.date('Y/m/d',$time);
        $fileName = $time . '.' . $extension;
        Storage::makeDirectory($destinationPath);
        $upload_success = Storage::put($destinationPath . '/' . $fileName, $content);
        
        

        if ($upload_success) {
            $upload = new Fileupload;
            $upload->nama_file = $fileName;
            $upload->mime = $mime;
            $upload->ext = $extension;
            $upload->folder = $destinationPath;
            $upload->save();
            $link = route('download_order',['id' => $upload->id ]);
            
            return $this->SendData(['link' => $link], 201);
        }

        return false;
    }
    
    public function download(Request $request,$id) {
        $file = Fileupload::find($id);
        $nama_file = $file->nama_file;
        $path = $file->folder.'/';
        $mime = $file->mime;
        $contents = Storage::get($path.$nama_file);
        $response = Response($contents, 200);
        return $response->header('Content-Type', $mime);
    }
    
    public function index(Request $request) {
        abort(404);
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
