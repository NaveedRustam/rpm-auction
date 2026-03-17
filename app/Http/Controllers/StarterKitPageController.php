<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StarterKitPageController extends Controller
{
    public function pageOne(): View
    {
        return view('converted.starter-kit.page-1', [
            'activePage' => 'page-1',
        ]);
    }

    public function pageTwo(): View
    {
        return view('converted.starter-kit.page-2', [
            'activePage' => 'page-2',
        ]);
    }
}
