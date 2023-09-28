<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // dd('hello world!');
       return view('welcome_message');
    }
}
