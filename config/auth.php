<?php

return [
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'nhanvien' => [
            'driver' => 'session',
            'provider' => 'NHANVIEN',
        ],
        'nhanvien-api' => [
            'driver' => 'token',
            'provider' => 'NHANVIEN',
        ],

        'taikhoanch' => [
            'driver' => 'session',
            'provider' => 'TAIKHOANCH',
        ],
        'taikhoanch-api' => [
            'driver' => 'token',
            'provider' => 'TAIKHOANCH',
        ],

        'administrator' => [
            'driver' => 'session',
            'provider' => 'ADMINISTRATOR',
        ],
        'administrator-api' => [
            'driver' => 'token',
            'provider' => 'ADMINISTRATOR',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        'NHANVIEN' => [
            'driver' => 'eloquent',
            'model' => App\Models\NHANVIEN::class,
        ],


        'TAIKHOANCH' => [
            'driver' => 'eloquent',
            'model' => App\Models\CuaHang::class,
        ],

        
        'ADMINISTRATOR' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
        'NHANVIEN' => [
            'provider' => 'NHANVIEN',
            'table' => 'password_resets',
            'expire' => 60,
        ],


        'TAIKHOANCH' => [
            'provider' => 'TAIKHOANCH',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'ADMINISTRATOR' => [
            'provider' => 'ADMINISTRATOR',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
