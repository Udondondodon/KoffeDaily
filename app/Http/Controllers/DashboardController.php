<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home.index', [
            'title' => 'Home'
        ]);
    }


    public function index()
    {
        return view('dashboard.index', [
            'title' => 'dashboard'
        ]);
    }
    public function a()
    {
        return view('welcome', [
            'title' => 'laravel'
        ]);
    }
}

