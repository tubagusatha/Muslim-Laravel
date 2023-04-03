<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Trend() {
        return view('trend');
    }

    public function login() {
        return view('auth.login');
    }
}
