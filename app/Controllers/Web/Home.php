<?php

namespace App\Controllers\Web;

class Home
{
    public function index()
    {
        return response()->view('home', []);
    }

    public function create()
    {
        return response()->view('home.create', []);
    }

    public function edit()
    {
        return response()->view('home.edit', []);
    }

    public function formCreate()
    {
        // ...
    }

    public function formEdit()
    {
        // ...
    }

    public function formDelete()
    {
        // ...
    }

    public function search()
    {
        // ...
    }
}
