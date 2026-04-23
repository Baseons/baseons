<?php

namespace App\Middlewares;

use Baseons\Collections\Middleware;

class Routes extends Middleware
{
    public function web()
    {
        // ...
    }

    public function api()
    {
        response()->header('Access-Control-Allow-Credentials', 'true');
        response()->header('Access-Control-Allow-Origin', request()->origin());
        response()->header('Access-Control-Allow-Methods', '*');
        response()->header('Access-Control-Allow-Headers', '*');
        response()->header('Content-type', 'application/json; charset=utf-8');
    }
}
