<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Invoice;
use DB;

class Isverify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = $request->user();
        $invoice = Invoice::where('user_id', $user->id)->first();
        if(!$invoice){
            return redirect('invoice/create/'.$user->id);
        }
//        dd($invoice->status );
        if($invoice->status == 0 ){
            return redirect('invoice/notifikasi/user');
        }

        return $next($request);
    }
}
