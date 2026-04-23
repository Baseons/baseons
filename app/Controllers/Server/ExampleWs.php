<?php

namespace App\Controllers\Server;

use Baseons\Collections\Log;
use Baseons\Server\WebSocket;
use Baseons\Server\Request;
use Baseons\Server\Response;
use Baseons\Server\Timer;
use Throwable;

class ExampleWs
{
    public function onStart(WebSocket $ws)
    {
        $ws->serverStorage()->set(json_encode([]))->finish();
    }

    public function onStop(WebSocket $ws)
    {
        // ...
    }

    public function onHandshake(WebSocket $ws, Request $request)
    {
        return true;
    }

    public function onOpen(WebSocket $ws, Request $request)
    {
        // ...
    }

    public function onMessage(WebSocket $ws, string $data, bool $binary)
    {
        // ...
    }

    public function onClose(WebSocket $ws)
    {
        // ...
    }

    public function onRequest(WebSocket $ws, Request $request, Response $response)
    {
        if ($request->isCallback()) {
            // ...

            return;
        }

        return $response->text('Page not found', 404);
    }

    public function onError(WebSocket $ws, string $on, Throwable $error)
    {
        Log::create('server-example', $error);
    }

    public function timer(WebSocket $ws, Timer $timer)
    {
        // ...
    }
}