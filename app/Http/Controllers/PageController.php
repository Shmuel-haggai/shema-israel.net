<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.homepage');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function cgv()
    {
        return view('pages.cgv');
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
