<?php

use Baseons\Console\Console;

// --------------------------------------------------------------------------|
//                             CONSOLE ROUTES                                |
// --------------------------------------------------------------------------|

Console::namespace('App\Controllers\Console')->group(function () {
    Console::command('example', 'Example@test')->description('command example');
});
