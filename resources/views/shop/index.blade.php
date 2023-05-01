@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")

<style>
  .card a {
  color: black;
  text-decoration: none;
}
</style>
<div style="display: flex; align-items: center;">
    <h1>SHOP</h1>
    <a href="sell">Jual</a>
  </div>
<div class="container">
    <div class="row justify-content-center">
        @foreach($barangs as $barang)
        <div class="col-md-2 mb-3">
          <a href="{{ url('data') }}/{{ $barang->name }}">
            <div class="card">
                @if ($barang->image)
                <img src="{{ asset('storage/' . $barang->image) }}" alt="..." class="card-img-top">
                @endif
              <div class="card-body">
                <h5 class="card-title">{{ $barang->name }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                </p>
                </a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection