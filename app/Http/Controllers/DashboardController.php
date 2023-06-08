<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Carbon\Carbon;

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

    public function akun()
    {
        return view('dashboard.akun', [
            'title' => 'Data Akun'
        ]);
    }

    public function a()
    {
        return view('home.index', [
            'title' => 'laravel'
        ]);
    }
}

