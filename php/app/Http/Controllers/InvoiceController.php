<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Storage;
use Response;
use App\Invoice;
use App\Msetting;
use App\Penawaran;
use App\User;
use Validator;

class InvoiceController extends Controller {

    public function index(Request $request) {
        abort(404);
    }

    public function create($id) {
        $query['id'] = $id;
        $query['upload_url'] = route('upload');
        return view('karma.invoice.invoice', ['data' => $query]);
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'bank' => 'required',
            'nominal' => 'required|numeric',
            'bukti_bayar' => 'required',
            'kode_sponsor' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('invoice/create/'.$request->user_id)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $setting = Msetting::where('s_nama','=','biaya agen')->first();
        $biaya = $setting->s_value;
        if($biaya > $request->nominal ){
            return redirect('invoice/create/'.$request->user_id)
                        ->withErrors(['Biaya transfer adalah '.$biaya])
                        ->withInput();
        }
        
        $pemberi = User::where('kode_sponsor','=',$request->kode_sponsor)->first();
        if(!$pemberi){
            return redirect('invoice/create/'.$request->user_id)
                        ->withErrors(['Kode Sponsor Tidak Dikenali'])
                        ->withInput();
        }
        
        $invoice = Invoice::create([
            'bank' => $request->bank,
            'nominal' => $request->nominal,
            'bukti_bayar' => $request->bukti_bayar,
            'user_id' => $request->user_id,
            'time' => time(),
        ]);
        
        
        $penawaran = new Penawaran;
        $penawaran->pemberi = $pemberi->id;
        $penawaran->penerima = $request->user_id;
        $penawaran->status = 2;
        $penawaran->member_tipe = 4;
        $penawaran->save();
        
        
        return view('karma.auth.notifikasi', ['data' =>
                array('title' => 'Pembayaran',
                    'deskripsi' => 'Pembayaran menunggu verifikasi PT PROBIS')
        ]);
    }

    public function notifikasi() {
        return view('karma.invoice.notifikasi', ['data' =>
                    array('title' => 'Pembayaran',
                        'deskripsi' => 'Pembayaran Anda belum terverifikasi')
            ]);
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

    public function upload(Request $request) {

        $file = $request->file('image');
        $content = File::get($file);
        $extension = $file->getClientOriginalExtension();
        $destinationPath = 'bayar';
        $fileName = time() . '.' . $extension;
        Storage::makeDirectory($destinationPath);
        $upload_success = Storage::put($destinationPath . '/' . $fileName, $content);

        if ($upload_success) {
            $link = route('download',['namafile' => $fileName ]);
            
            return $this->SendData(['link' => $link], 201);
        }

        return false;
    }
    
    public function download(Request $request) {
        $nama_file = $request->namafile;
        $path = 'bayar/';
        $mime = Storage::mimeType($path.$nama_file);
        $contents = Storage::get($path.$nama_file);
        $response = Response($contents, 200);
        return $response->header('Content-Type', $mime);
    }
    
}
