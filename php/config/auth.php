<?php

//return [
//
//
//    'defaults' => [
//        'guard' => 'web',
//        'passwords' => 'users',
//    ],
//
//
//    'guards' => [
//        'web' => [
//            'driver' => 'session',
//            'provider' => 'users',
//        ],
//
//        'api' => [
//            'driver' => 'token',
//            'provider' => 'users',
//        ],
//    ],
//
//
//    'providers' => [
//        'users' => [
//            'driver' => 'eloquent',
//            'model' => App\User::class,
//        ],
//
//        // 'users' => [
//        //     'driver' => 'database',
//        //     'table' => 'users',
//        // ],
//    ],
//
//
//    'passwords' => [
//        'users' => [
//            'provider' => 'users',
//            'email' => 'auth.emails.password',
//            'table' => 'password_resets',
//            'expire' => 60,
//        ],
//    ],
//
//];


return [
    // This is the default guard used, not need to declare
    // another guard here
    'defaults' => [
        'guard' => 'user',
            'passwords' => 'user',
    ],

    // Here we must to declare the guards, if we created the App\Admin
    // class as first step, we don't need to create a custom guard
    'guards' => [
        'user' => [
            'driver' => 'session',
            'provider' => 'user',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
    ],
    // In this example we are using only 'eloquent' driver
    'providers' => [
        'user' => [
            'driver' => 'eloquent',
            'model' => 'App\User',
        ],
        'admin' => [
            'driver' => 'eloquent',
            'model' => 'App\Admin',
        ],
    ],
    'passwords' => [
        'user' => [
            'provider' => 'user',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admin' => [
            'provider' => 'admin',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ]
    ]
];