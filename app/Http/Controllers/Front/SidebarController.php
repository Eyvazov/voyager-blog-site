<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function about()
    {
        $about = About::whereId('id', 1)->get();
        return view('front.layouts.sidebar', compact('about'));
    }
}
