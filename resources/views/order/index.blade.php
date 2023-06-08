@extends('layouts.main')
@include('partials.fixed_nav')

<html>
  <body>
    <div class="mt-10 divide-y divide-black">
        <div class="text-center ">
            <p class="text-3xl font-bold my-2">Welcome Back {{ auth()->user()->name }}!</p>
            <p class="text-base font-bold mb-4">Di Sinilah Anda Dapat Mengedit Detail Akun Anda</p>
        </div>
        <div class="grid grid-cols-3 font-bold text-xl p-4 text-center">
            <a href="/akun">
                <p class="text-end mt">ACCOUNT</p>
            </a>
            <a href="/order">
                <p>ORDERS</p>
            </a>
            <a href="income">
                <p class="text-start">PENDAPATAN</p>
            </a>
        </div>
        @if (auth()->user()->role==2)     
        <div class="">
          <div class="p-8">
              <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                  <table class="table-auto w-full">
                      <thead class="bg-blue-500 text-white shadow-lg">
                          <tr>
                              <th class="py-3 px-4 text-left">Nama Pemesan</th>
                              <th class="py-3 px-4 text-left">Nama Produk</th>
                              <th class="py-3 px-4 text-left">Jumlah Pesanan</th>
                              <th class="py-3 px-4 text-left">Total Harga</th>
                              <th class="py-3 px-4 text-left">Status</th>
                              <th class="py-2 px-2 text-left">Konfirmasi Pemesanan</th>
                              <th class="py-2 px-2 text-left">Konfirmasi Pemesanan</th>
                          </tr>
                      </thead>
                      @foreach ($pesanans as $pesanan)
                      @if ($pesanan->status=='Diproses' && $pesanan->mitra_id == auth()->user()->id)
                      <tbody>
                          <tr class="hover:bg-gray-100">
                              <td class="px-4 py-3">{{ $pesanan->nama_pemesan }}</td>
                              <td class="px-4 py-3">{{ $pesanan->nama_produk }}</td>
                              <td class="px-4 py-3">{{ $pesanan->quantity }}</td>
                              <td class="px-4 py-3">Rp. {{ number_format($pesanan->total_harga) }}</td>
                              <td class="px-4 py-3">{{ $pesanan->status }}</td>
                              <td class="">
                                  <a href="{{ url('tolak')}}/{{ $pesanan->id }} ">
                                      <button class="bg-red-500 hover:bg-red-700 text-white rounded-xl w-24 mx-12">Tolak Pesanan</button>
                                  </a>
                              </td>
                              <td class="">
                                  <a href="{{ url('order')}}/{{ $pesanan->id }} ">
                                      <button class="bg-gray-500 hover:bg-gray-700 text-white rounded-xl w-24 mx-12">Konfirmasi Pesanan</button>
                                  </a>
                              </td>
                          </tr>
                      </tbody>
                      @endif
                      @endforeach
                  </table>
              </div>
          </div>
        </div>
        @endif
        @if (auth()->user()->role==1)
        <div class="grid grid-cols-3 p-10">
            <div>
                <p class="text-2xl relative left-28">Biaya admin</p>
            </div>
            <div class="">
                <p class="bg-black text-white font-bold py-2 px-4 rounded mx-32 items-center relative text-center left-28">Rp. {{ number_format($biaya->nominal) }}</p>
            </div>
            <div class="">
                <a href="{{ url('ubah')}}/{{ $biaya->id }}">
                    <button class="bg-black text-white font-bold py-2 px-4 rounded mx-32 items-center relative text-center">Ubah</button>
                </a>
            </div>
        </div>
            
        @endif
        {{-- </div> --}}
    </body>
</html>