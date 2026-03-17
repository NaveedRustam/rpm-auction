<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('banners.home');
    }

    public function auctions(): View
    {
        return view('banners.acutions');
    }

    public function salvage(): View
    {
        return view('banners.salvage');
    }

    public function drive(): View
    {
        return view('banners.drive');
    }

    public function about(): View
    {
        return view('banners.about');
    }

    public function contact(): View
    {
        return view('banners.contact');
    }
}
