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
  <body>
    <div class=" grid grid-cols-3 gap-4 my-7">
      @foreach($barangs as $barang)
      <div class="">
      @if ($barang->image)
      <img class="border-2 border-black p-2 w-96 h-96" src="{{ asset('storage/' . $barang->image) }}" alt="">
      @endif
      <div class="border-2 border-black p-2 grid grid-cols-3 w-96 h-auto">
        <h5 class="text-xl col-span-2">{{ $barang->name }}</h5>
        <p class="relative text-right">Rp. {{ number_format($barang->harga)}} <br></p>
        @if ($barang->mitra_id == auth()->user()->id)
        <div>
          <a class="col-start-1" href="{{ url('edit') }}/{{ $barang->id }}">
              <button class="bg-black text-white rounded-3xl w-32 mt-2 text-base" style="font-family: 'Inknut Antiqua', sans-serif;">Edit</button>
          </a>
        </div>
        <div>
          <a class="p-28" href="/delete/{{ $barang->id }}">
              <button class="bg-black text-white rounded-3xl w-32 mt-2 text-base" style="font-family: 'Inknut Antiqua', sans-serif;">Delete</button>
          </a>
        </div>
        @endif
        @if ($barang->mitra_id !=  auth()->user()->id )
        <a class="col-span-2 w-32" href="{{ url('shop') }}/{{ $barang->id }}">
          <button class="bg-black text-white rounded-3xl w-32 mt-2 text-base" style="font-family: 'Inknut Antiqua', sans-serif;">Add to Cart</button>
        </a>
        @endif
          </div>
        </div>
        @endforeach
      </div>
    </body>
    @if (auth()->user()->role=="2")
    <a class="" href="/sell">
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-96 items-center relative text-center top-11">Jual barang</button>
    </a>
    @endif
</html>