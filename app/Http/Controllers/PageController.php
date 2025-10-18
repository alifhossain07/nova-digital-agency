<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about'); // refers to resources/views/about.blade.php
    }
    public function service()
    {
        return view('service'); // refers to resources/views/about.blade.php
    }
    public function contact()
    {
        return view('contact'); // refers to resources/views/about.blade.php
    }


}
