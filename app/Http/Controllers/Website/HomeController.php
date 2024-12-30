<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $sections = Section::where('status', 1)->orderBy('sort')->get();
        $services = Service::where('status', 1)->orderBy('sort')->get();
        return view('index.index', compact('sections', 'services'));
    }
}
