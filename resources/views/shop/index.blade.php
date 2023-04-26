@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")
<div style="display: flex; align-items: center;">
    <h1>SHOP</h1>
    <a href="sell">Jual</a>
  </div>
<div class="container">
    <div class="row justify-content-center">
        
        @foreach($barangs as $barang)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if ($barang->image)
                <img src="{{ asset('storage/' . $barang->image) }}" alt="..." class="card-img-top">
                @endif
              <div class="card-body">
                <h5 class="card-title">{{ $barang->name }}</h5>
                <p class="card-text">
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Berat :</strong> {{ number_format($barang->berat)}} gram <br>
                    <strong>Expired Date :</strong> {{ \Carbon\Carbon::parse($barang->expired)->format('d F Y')}} <br>
                    <hr>
                    <strong>Deskripsi :</strong> <br>
                    {{ $barang->deskripsi }} 
                </p>
                <a href="{{ url('cart') }}/{{ $barang->name }}" class="btn btn-primary"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection