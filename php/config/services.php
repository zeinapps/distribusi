<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
        'client_id'     => '558502704251928',
        'client_secret' => 'b3e883b66120f37206b22348732bf553',
        'redirect'      => 'http://distribusi.local/login/callback/facebook',
    ],
    
    'google' => [
        'client_id'     => '494401547205-s1iruf4vikklk1gmr5rl5hpc7bq8o159.apps.googleusercontent.com',
        'client_secret' => 'PeVNK8uDvjKujlAgYtc6YqAH',
        'redirect'      => 'http://distribusi.com/callback',
    ],

];
