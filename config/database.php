<?php

return [
    'mysql_only_connect'  => [
        'driver'    => 'mysql',
        'host'      => env('DB_HOST', '127.0.0.1'),
        'port'      => env('DB_PORT', '3306'),
        'database'  => null,
        'username'  => env('DB_USERNAME', 'root'),
        'password'  => env('DB_PASSWORD', '')
    ],

    'mysql'  => [
        'driver'    => 'mysql',
        'host'      => env('DB_HOST', '127.0.0.1'),
        'port'      => env('DB_PORT', '3306'),
        'database'  => "User_micro_service",
        'username'  => env('DB_USERNAME', 'root'),
        'password'  => env('DB_PASSWORD', '')
    ],

];