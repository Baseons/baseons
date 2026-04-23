<?php

// --------------------------------------------------------------------------|
//                             MAIL CONFIGURATIONS                           |
// --------------------------------------------------------------------------|

return [
    'default' => env('MAIL_DEFAULT', 'default'),

    'connections' => [
        'default' => [
            'send' => [
                'host' => env('MAIL_HOST'),
                'port' => env('MAIL_PORT', 465),
                'auth' => env('MAIL_AUTH', 'login'), // plain - login - xoauth2
                'username' => env('MAIL_USERNAME'),
                'password' => env('MAIL_PASSWORD'),
                'from_address' => env('MAIL_FROM_ADDRESS'),
                'from_name' => env('MAIL_FROM_NAME'),
                'encryption' => ENV('MAIL_ENCRYPTION', 'ssl')
            ],

            'read' => [
                'host' => str_replace('smtp', 'imap', env('MAIL_HOST')),
                'port' => 993,
                'username' => env('MAIL_USERNAME'),
                'password' => env('MAIL_PASSWORD'),

                'protocol' => 'imap', // pop3 - imap - nntp
                'ssl' => true,
                'cert' => true
            ]
        ]
    ]
];
