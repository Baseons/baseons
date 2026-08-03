<?php

// --------------------------------------------------------------------------|
//                           DATABASE CONFIGURATIONS                         |
// --------------------------------------------------------------------------|

return [
    'default' => env('DB_DEFAULT', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver' => env('DB_DRIVE', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),

            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                // PDO::ATTR_TIMEOUT => 1
            ]) : []
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 5432),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'search_path' => 'public',

            'options' => array_filter([
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_CASE => PDO::CASE_LOWER
            ])
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),

            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        ]
    ]
];
