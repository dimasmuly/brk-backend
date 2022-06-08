<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menu()
    {
        return view('pages.menu');
    }

    public function facilities()
    {
        return view('pages.facilities');
    }

    public function ordering()
    {
        return view('pages.ordering');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
