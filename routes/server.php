<?php

use Baseons\Server\Server;

// --------------------------------------------------------------------------|
//                           SERVERS ROUTES                                  |
// --------------------------------------------------------------------------|

Server::namespace('App\Controllers\Server')->group(function () {
    Server::ws(6500, 'ExampleWs')->name('example')->receive(true);
    Server::http(6501, 'ExampleHttp')->name('http');
});
