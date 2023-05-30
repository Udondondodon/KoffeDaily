@extends('layouts.main')
@include('partials.fixed_nav')

<html>
  <body>
    <div clasxxxxs=" grid grid-cols-3 gap-4 my-7">
      
      
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
                                <th class="py-2 px- w-1/12">Konfirmasi Pemesanan</th>
                            </tr>
                        </thead>
                        @foreach ($pesanans as $pesanan)
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-3">{{ $pesanan->nama_pemesan }}</td>
                                <td class="px-4 py-3">{{ $pesanan->nama_produk }}</td>
                                <td class="px-4 py-3">{{ $pesanan->quantity }}</td>
                                <td class="px-4 py-3">{{ $pesanan->total_harga }}</td>
                                <td class="px-4 py-3">{{ $pesanan->status }}</td>
                                <td class="px-2 py-1">
                                    <a href="{{ url('order')}}/{{ $pesanan->id }} ">
                                        <button class="bg-gray-500 hover:bg-gray-700 text-white rounded-xl">Konfirmasi Pesanan</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
      
      
      </div>
    </body>
</html>