<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccumulationController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.accumulation.index');
    }
}
