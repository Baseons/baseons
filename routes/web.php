<?php

use Baseons\Minify\Minify;
use Baseons\Router\Route;

// --------------------------------------------------------------------------|
//                               WEB ROUTES                                  |
// --------------------------------------------------------------------------|

Route::namespace('App\Controllers\Web')->name('web')->group(function () {
    Route::get('/', 'Home@index')->name('home');

    Route::name('file')->prefix('file')->group(function () {
        Route::file('img/{name}', path()->resources('img/{name}'), function ($content) {
            return ($value = (new Minify)->img($content, resize: 100)) ? $value : $content;
        })->name('img');

        Route::file('css/{name}', path()->resources('css/{name}'), function ($content) {
            return (new Minify)->css($content);
        })->name('css');

        Route::file('js/{name}', path()->resources('js/{name}'), function ($content) {
            return (new Minify)->js($content);
        })->name('js');
    });
});
