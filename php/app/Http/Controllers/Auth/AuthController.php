<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Config;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Socialite;
use Auth;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

//    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
//    protected $redirectTo = '/registrasi';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('guest', ['except' => 'logout']);
    }
    
     public function getSocialAuth($provider='google')
       {
           if(!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist

           return Socialite::with($provider)->redirect();
       }


       public function getSocialAuthCallback($provider='google')
       {
          if($user = Socialite::with($provider)->user()){
              
            $email =   $user->getEmail();
            $nama = $user->getName();
            $avatar = $user->getAvatar();
//            dd($avatar);
            $user = User::where('email','=',$user->getEmail())->first();
             if($user){
                 
                 if(!$user->password){
                      return redirect('updateuser/'.$user->id);
                 }
                 
                  $data = [
                  'email' => $email
                  ];
                 Auth::login(User::firstOrCreate($data));
                 return redirect('dashboard');
             }else{
                $data = [
                  'nama' => $nama,
                  'email' => $email,
                  'avatar' => $avatar
                ];

                $user = User::firstOrCreate($data);
                $flight = User::find($user->id);
                $flight->avatar = $avatar;
                $flight->save();
                
                Auth::login($user);
                return redirect('updateuser/'.$user->id);
             }
              
         
          }else{
             return 'something went wrong';
          }
       }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request) {
        $validator = Validator::make($request->all(), [
                    'nama' => 'required|max:100',
                    'email' => 'required|email|max:100',
        ]);

        if ($validator->fails()) {
            return redirect('registrasi')
                            ->withErrors($validator)
                            ->withInput();
        }

        if (User::where('email', $request->email)->first()) {
            return redirect('registrasi')
                            ->withErrors(array('Email ' . $request->email . ' telah terdaftar'))
                            ->withInput();
        }

        $aktivasi_token = $this->random_token();
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'aktivasi_token' => $aktivasi_token,
        ]);

        $link = route('aktivasi').'/'.$aktivasi_token;
        $data = [
            'link' => $link,
        ];
        Mail::send('email', $data, function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your Aktivation Link');
        });
        

        return view('karma.auth.notifikasi', ['data' =>
            array('title' => 'Sukses',
                'deskripsi' => 'Cek Email Anda, dan lakukan aktifasi')
        ]);
    }

    protected function aktivasiform($aktivasi_token) {
        return view('karma.auth.aktivasi', ['data' =>
            array('aktivasi_token' => $aktivasi_token)
        ]);
    }

    protected function aktivasi($aktivasi_token) {
        if ($user = User::where('aktivasi_token', $aktivasi_token)->first()) {
            
            
            //            $parent = User::where('kode_sponsor', $request->kode)->first();
//            
//            if(!$parent){
//                return view('karma.auth.notifikasi', ['data' =>
//                array('title' => 'Aktifasi Gagal',
//                        'deskripsi' => 'Token Aktifasi tidak dikenali atau sudah expired. '
//                    . ' Untuk aktifasi ulang klik link aktifasi pada email')
//                ]);
//            }
        
            
            $parent_id = 1;
            User::where('aktivasi_token', $aktivasi_token)
                    ->update([
                        'aktivasi_token' => '',
                        'parent_user' => $parent_id
            ]);
            return redirect('/updateuser/'.$user->id);
        } else {
            return view('karma.auth.notifikasi', ['data' =>
                array('title' => 'Aktifasi Gagal',
                    'deskripsi' => 'Token Aktifasi tidak dikenali atau sudah expired')
            ]);
        }
    }

    protected function updateuserform($user_id) {
        $host = Config::get('app.host');
        $data = ['data' =>  array('id' => $user_id) ];
        $data['upload_url'] = route('upload_order');
        $data['data']['host'] = Config::get('app.host');
        return view('karma.auth.updateuser' , $data );
    }

    protected function updateuser(Request $request) {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
                    'id' => 'required',
                    'alamat' => 'required',
                    'kode_pos' => 'numeric',
                    'hp' => 'required',
                    'ktp' => 'required',
                    'password' => 'required|confirmed',
                    'tanggal_lahir' => 'required',
                    'tempat_lahir' => 'required',
                    'lat' => 'required',
                    'long' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('updateuser/' . $request->id)
                            ->withErrors($validator)
                            ->withInput();
        }

        $source = $request->tanggal_lahir;
        $date = new \DateTime($source);

        User::where('id', $request->id)
                ->update([
                    'alamat' => $request->alamat,
                    'hp' => $request->hp,
                    'ktp' => $request->ktp,
                    'password' => bcrypt($request->password),
                    'ibu' => 'ibu',
                    'lat' => $request->lat,
                    'long' => $request->long,
                    'is_verify' => 1,
                    'tanggal_lahir' => $date->format('Y-m-d'),
                    'tempat_lahir' => $request->tempat_lahir,
                    'kode_pos' => $request->kode_pos?$request->kode_pos:'',
                    'id_kel' => $request->id_kel?$request->id_kel:'',
                    'id_kec' => $request->id_kec?$request->id_kec:'',
                    'id_kab' => $request->id_kab?$request->id_kab:'',
                    'id_prov' => $request->id_prov?$request->id_prov:'',
                    'kode_sponsor' => $this->random_kode(),
        ]);
        return redirect('login');
    }

    protected function login(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('login')
                            ->withErrors($validator)
                            ->withInput();
        }

        $auth = auth()->guard('user');
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if ($auth->attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return redirect('login')
                            ->withErrors(array('Gagal Login'))
                            ->withInput();
        }
    }

}
