<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
use App\Models\PesananDetail;

class IncomeController extends Controller
{
    public function index()
    {
        $pendapatans = Pendapatan::latest()->first();
        // $pesanans = PesananDetail::find($id);
        return view('income.index', 
            compact('pendapatans'), [
            'title' => 'Pendapatan'
        ]);
    }
}
