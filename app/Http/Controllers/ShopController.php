<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Carbon\Carbon;

class ShopController extends Controller
{

    public function index()
    {
        $barangs = Barang::paginate(21);
        return view('shop.index', 
            compact('barangs'), [
            'title' => 'shop'
        ]);
    }

    public function jual() {
        return view('sell.index', [
            'title' => 'Jual'
        ]);
    }


    public function shop($id) {
        $barangs = Barang::where('id', $id)->first();

        return view('shop.data', 
            compact('barangs'), [
            'title' => 'Shop'
        ]);
    }

    public function cart($name) {
        $barangs = Barang::where('name', $name)->first();

        return view('keranjang.index', 
            compact('barangs'), [
            'title' => 'keranjang'
        ]);
    }
    

    public function form(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'stok' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'expired' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        Barang::create($validatedData);

        return redirect('/shop')->with('success', 'barang berhasil ditambahkan');
    }

    public function pesan(Request $request, $id)
    {	
    	$barang = Barang::where('id', $id)->first();

        if($request->input('jumlah_pesan') > $barang->stok)
    	{
    		return redirect('shop/'.$id);
    	}

        
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal_pemesanan = Date::now()->format('Y-m-d');
        $pesanan->waktu_pemesanan = Date::now()->format('Y-m-d H:i:s');
        $pesanan->nama_produk = $barang->name;
        $pesanan->quantity = $request->input('jumlah_pesan');
        $pesanan->nama_pemesan = Auth::user()->name;
        $pesanan->total_harga = $barang->harga* $request->input('jumlah_pesan');
        
        $pesanan->save();
        
        $pesanan_detail = new PesananDetail;
        $pesanan_detail->nama_pemesan = Auth::user()->name;
        $pesanan_detail->jumlah = $request->input('jumlah_pesan');
        $pesanan_detail->jumlah_harga = $barang->harga* $request->input('jumlah_pesan');
        $pesanan_detail->status = 'diproses';

        // $pesanan_detail->save();

        
        
        return view('keranjang.detail', compact('barang','pesanan', 'pesanan_detail'), [
            'title' => 'Shop'
        ]);

    }
    public function checkout(Request $request)
    {	
        // $barang = Barang::all();
        $barang = Barang::latest()->first();;
        $pesan = Pesanan::latest()->first();;

        $pesanan = new PesananDetail;
        $pesanan->waktu_pemesanan = $pesan->waktu_pemesanan;
        $pesanan->nama_produk = $barang->name;
        $pesanan->quantity = $pesan->quantity;
        $pesanan->nama_pemesan = Auth::user()->name;
        $pesanan->total_harga = $pesan->total_harga;
        $pesanan->status = 'diproses';
        $pesanan->save();

        $barang->stok = $barang->stok - $pesanan->quantity;

        $barang->save();

        return view('dashboard.index', 
            compact('pesanan', 'barang'), [
            'title' => 'Dashboard'
        ]);

    }
}