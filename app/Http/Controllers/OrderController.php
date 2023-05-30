<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $pesanans = PesananDetail::paginate(20);
        return view('order.index', 
            compact('pesanans'), [
            'title' => 'order and payment'
        ]);
    }

    public function order($id) {
        $pesanans = PesananDetail::find($id);
        
        $pesanans->status = 'Ready for Pickup';

        $pesanans->save();

        $pesanans = PesananDetail::paginate(20);
        return view('order.index', 
            compact('pesanans'), [
            'title' => 'order and payment'
        ]);
    }
}
