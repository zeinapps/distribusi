<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Notifikasi;
use DB;

class Notif
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        $notifikasi = Notifikasi::where('user_id',$user->id)
                ->where('status', 0)
                ->get();
        $jumlah_notif = count($notifikasi);
        $member = User::where('member_tipe',5)->get();
        $jumlah_member = count($member);
        
        session(['jumlah_notif' => $jumlah_notif]);
        session(['notifikasi' => $notifikasi]);
        session(['member' => $member]);
        session(['jumlah_member' => $jumlah_member]);

        return $next($request);
    }
}
