<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show login page
    public function login()
    {
        return view('login'); // resources/views/login.blade.php
    }
}
