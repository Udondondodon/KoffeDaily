<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class ShopController extends Controller
{

    public function index()
    {
        $barangs = Barang::paginate(20);
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
}