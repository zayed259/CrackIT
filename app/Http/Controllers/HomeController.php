<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function management()
    {
        return view('management');
    }
    
    public function team()
    {
        return view('team');
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }

}
