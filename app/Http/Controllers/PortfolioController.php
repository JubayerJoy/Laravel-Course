<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('Pages.home');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function service()
    {
        return view('Pages.service');
    }

    public function project()
    {
        return view('Pages.project');
    }

    public function contact()
    {
        return view('Pages.contact');
    }

}
