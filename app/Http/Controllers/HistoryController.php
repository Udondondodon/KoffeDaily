<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananDetail;

class HistoryController extends Controller
{
    public function index()
    {
        $pesanans = PesananDetail::paginate(20);
        // $pesanans = PesananDetail::find($id);
        return view('history.index', 
            compact('pesanans'), [
            'title' => 'Riwayat Penjualan'
        ]);
    }
}
