<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index.index');
    }
}