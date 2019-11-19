<?php

return [
    'migrations' => 'mysql',
    'default' => 'mysql',

    'connections' => [
        'mysql_only_connect'  => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST'),
            'port'      => env('DB_PORT'),
            'database'  => null,
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD')
        ],

        'mysql'  => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'port'      => env('DB_PORT', '3306'),
            'database'  => env('DB_DATABASE'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', '')
        ],

        'INFORMATION_SCHEMA' =>
        [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'port'      => env('DB_PORT', '3306'),
            'database'  => 'INFORMATION_SCHEMA',
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', '')
        ],
    ]
];