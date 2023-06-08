<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use App\Models\Barang;
use App\Models\User;
use App\Models\Biaya;
use App\Models\Pesanan;
use App\Models\Pendapatan;
use App\Models\PesananDetail;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $pesanans = PesananDetail::paginate(20);
        $biaya = Biaya::latest()->first();
        return view('order.index', 
            compact('pesanans', 'biaya'), [
            'title' => 'order and payment'
        ]);
    }

    public function order($id) {
        $pesanans = PesananDetail::find($id);
        $user = auth()->user();
        $pendapatan = Pendapatan::latest()->first();
        $biaya = Biaya::latest()->first();
        
        if ($pesanans->status == 'Diproses') {
            $pesanans->status = 'Finished';
            $user->pendapatan = $user->pendapatan + $pesanans->total_harga;
            $pendapatan->update(['pendapatan' => $pendapatan->pendapatan + $biaya->nominal]);
            $pesanans->save();
            $user->save();
        }

        $pesanans = PesananDetail::paginate(20);
        return redirect('order')->with('success', 'Barang created successfully');
    }

    public function tolak($id) {
        $pesanans = PesananDetail::find($id);

        if ($pesanans->status == 'Diproses') {
            $pesanans->status = 'Order Canceled';
            $pesanans->save();
        }
        
        $pesanans = PesananDetail::paginate(20);
        return view('order.index', 
            compact('pesanans'), [
            'title' => 'order and payment'
        ]);
    }

    public function ubah($id) {
        $biaya = Biaya::findOrFail($id);
        
        return view('order.edit', compact('biaya'), [
            'title' => 'edit'
        ]);
    }

    public function ubah1(Request $request, $id) {
        $biaya = Biaya::find($id);

        $biaya->update($request->all());
    
        // Redirect or do something else after successful creation
        return redirect('order')->with('success', 'Barang created successfully');
    }
}
