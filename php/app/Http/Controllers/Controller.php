<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function random_token() {
        $cek = true;
        $Token = '1234AbCd';
        while ($cek) {
            $panjangToken = 6;
            $base = 'abcdefghjkmnpqrstwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
            $max = strlen($base) - 1;
            $Token = '';
            mt_srand((double) microtime() * 1000000);
            while (strlen($Token) < $panjangToken)
                $Token.=$base{mt_rand(0, $max)};

            if (!User::where('aktivasi_token', $Token)->first()) {
                $cek = false;
            }
        }
        return $Token;
    }
    
    public function random_kode() {
        $cek = true;
        $Token = '1234AbCd';
        while ($cek) {
            $panjangToken = 6;
            $base = 'abcdefghjkmnpqrstwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
            $max = strlen($base) - 1;
            $Token = '';
            mt_srand((double) microtime() * 1000000);
            while (strlen($Token) < $panjangToken)
                $Token.=$base{mt_rand(0, $max)};

            if (!User::where('kode_sponsor', $Token)->first()) {
                $cek = false;
            }
        }
        return $Token;
    }
    
    public function SendData($content = array(), $code = 200) {
       $response = [
            'status' => 1,
            'code' => $code,
            'message' => 'success',
            'data' => $content,
        ];
        return response()->json($response);
    }

    public function SendError($error = array()) {
        $response = null;
        if (array_key_exists("code", $error)) {
            $response = [
                'status' => 0,
                'code' => $error['code'],
                'message' => $error['message'],
                'data' => null,
            ];
        } else {
            $response = [
                'status' => 0,
                'code' => 0,
                'message' => $error,
                'data' => null,
            ];
        }
        return response()->json($response);
    }
    
}
