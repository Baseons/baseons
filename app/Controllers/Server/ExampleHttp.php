<?php

namespace App\Controllers\Server;

use Baseons\Collections\Log;
use Baseons\Server\Request;
use Baseons\Server\Response;
use Throwable;

class ExampleHttp
{
    public function request(Request $request, Response $response)
    {
        if ($request->method('get') and $request->path('/')) {
            return $response->view('home');
        }

        return $response->text('Not found', 404);
    }

    public function onError(Throwable $error)
    {
        Log::create('server-http', $error);
    }
}
