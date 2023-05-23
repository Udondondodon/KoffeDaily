@extends('layouts.main')
@include('partials.fixed_nav')

<style>

@font-face {
  font-family: 'Inknut Antiqua';
  src: url('path/to/inknut-antiqua.woff2') format('woff2'),
       url('path/to/inknut-antiqua.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}
</style>

<html>
  <div class=" grid grid-cols-4 gap-4 my-7">
    @foreach($barangs as $barang)
    <div class="">
      @if ($barang->image)
      <img class="border-2 border-black p-2" src="{{ asset('storage/' . $barang->image) }}" alt="">
      @endif
      <div class="border-2 border-black p-2 grid grid-cols-3">
        <h5 class="text-xl col-span-2">{{ $barang->name }}</h5>
        <p class="relative text-right">Rp. {{ number_format($barang->harga)}} <br></p>
        <a class="col-span-2 w-32" href="{{ url('shop') }}/{{ $barang->id }}">
          <button class="bg-black text-white rounded-3xl w-32 mt-2 text-base" style="font-family: 'Inknut Antiqua', sans-serif;">ADD TO CART</button>
        </a>
          </div>
        </div>
      @endforeach
    </div>
    <body>
      <a href="/sell">
      <h1>test</h1>
      </a>
  </body>
</html>