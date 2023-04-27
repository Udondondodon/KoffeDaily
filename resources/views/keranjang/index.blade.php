@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")

<div class="container">
        <div class="col mt-3 mb-3 hidden">
            <a href="{{ url('shop') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> You see nothing</a>
        </div>
        <div class="col mt-4 mb-3">
            <a href="{{ url('shop') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $barangs->image) }}" alt="..." class="card-img-top"> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $barangs->name }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Tanggal Pemesanan</td>
                                        <td>:</td>
                                        <td>{{ date('Y-m-d') }}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>Waktu Pemesanan</td>
                                        <td>:</td>
                                        <td>{{ date('H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Produk</td>
                                        <td>:</td>
                                        <td>{{ $barangs->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barangs->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barangs->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barangs->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('cart') }}/{{ $barangs->name }}" >
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection