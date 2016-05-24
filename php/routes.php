<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', function() {
        return view('karma.auth.login');
    });
    Route::post('/login', 'Auth\AuthController@login');
    Route::get('registrasi', function() {
        return view('karma.auth.register');
    });

    Route::post('/registrasi', 'Auth\AuthController@create');
    Route::get('/aktivasi/{aktivasi_token}', 'Auth\AuthController@aktivasiform');
    Route::get('/aktivasi/{aktivasi_token}/ok', 'AnggotaController@aktivasi');
    Route::post('/aktivasi', [
        'as' => 'aktivasi',
        'uses' => 'Auth\AuthController@aktivasi'
    ]);
    Route::get('/updateuser/{user_id}', 'Auth\AuthController@updateuserform');
    Route::post('/updateuser', 'Auth\AuthController@updateuser');

    
    Route::post('/invoice', 'InvoiceController@store');
    Route::post('/invoice/upload', [
        'as' => 'upload',
        'uses' => 'InvoiceController@upload'
    ]);
    Route::get('/invoice/{namafile}', [
        'as' => 'download',
        'uses' => 'InvoiceController@download'
    ]);

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/invoice/create/{user_id}', 'InvoiceController@create');
        Route::get('/invoice/notifikasi/user', 'InvoiceController@notifikasi');
        
        Route::get('/logout', function() {
                $auth = auth()->guard('user');
                $auth->logout();
                return redirect('login');
            });
        
        Route::group(['middleware' => ['isverify']], function () {
            Route::get('/', function () {
                return view('karma.index');
            });


            //    
            //    Route::get('/profil', function() {
            //        $auth = auth()->guard('user');
            //        dd(Request::user());
            //    });
            //    
            

            //
            Route::get('/kategori', 'KategoriController@index');
            Route::get('/kategori/create', 'KategoriController@create');
            Route::post('/kategori', 'KategoriController@store');
            Route::get('/kategori/edit/{id}', 'KategoriController@edit');
            Route::post('/kategori/edit/{id}', 'KategoriController@update');
            Route::get('/kategori/{id}', 'KategoriController@show');

            Route::get('/lokasi', 'LokasiController@index');
            Route::get('/lokasi/create', 'LokasiController@create');
            Route::post('/lokasi', 'LokasiController@store');
            Route::get('/lokasi/edit/{id}', 'LokasiController@edit');
            Route::post('/lokasi/edit/{id}', 'LokasiController@update');
            Route::get('/lokasi/{id}', 'LokasiController@show');

            Route::get('/setting', 'SettingController@index');
            Route::get('/setting/create', 'SettingController@create');
            Route::post('/setting', 'SettingController@store');
            Route::get('/setting/edit/{id}', 'SettingController@edit');
            Route::post('/setting/edit/{id}', 'SettingController@update');
            Route::get('/setting/{id}', 'SettingController@show');

            Route::get('/anggota', 'AnggotaController@index');
            Route::get('/anggota/create', 'AnggotaController@create');
            Route::get('/anggota/{id}', 'AnggotaController@show');
            Route::post('/anggota', 'AnggotaController@store');

            Route::get('/profil', 'ProfilController@show');
            Route::get('/profil/edit', 'ProfilController@edit');
            Route::post('/profil/edit', 'ProfilController@update');

            Route::get('/barang', 'BarangController@index');
            Route::get('/barang/create', 'BarangController@create');
            Route::post('/barang', 'BarangController@store');
            Route::get('/barang/edit/{id}', 'BarangController@edit');
            Route::post('/barang/edit/{id}', 'BarangController@update');
            Route::get('/barang/{id}', 'BarangController@show');
        });
    });

//    Route::auth();
});
