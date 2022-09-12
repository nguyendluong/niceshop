<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{

    public function index()
    {
        return view('client.login.index');
    }
    public function index1()
    {
        return view('client.register.index');
    }

}
