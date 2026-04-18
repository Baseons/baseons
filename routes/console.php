<?php

use App\Console\Example;
use Baseons\Console\Console;

// --------------------------------------------------------------------------|
//                             CONSOLE ROUTES                                |
// --------------------------------------------------------------------------|

Console::namespace('App\Console')->group(function () {
    Console::command('example', [Example::class, 'helo'])->description('command example');
});
