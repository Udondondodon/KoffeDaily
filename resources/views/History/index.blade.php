@extends('layouts.main')
@include('partials.fixed_nav')

<html>
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
                        </tr>
                    </thead>
                    <div>
                        @if (auth()->user()->role == 1)    
                        @foreach ($pesanans as $pesanan)
                        @if ($pesanan->status=='Finished')
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-3">{{ $pesanan->nama_pemesan }}</td>
                                <td class="px-4 py-3">{{ $pesanan->nama_produk }}</td>
                                <td class="px-4 py-3">{{ $pesanan->quantity }}</td>
                                <td class="px-4 py-3">Rp. {{ number_format($pesanan->total_harga) }}</td>
                                <td class="px-4 py-3">{{ $pesanan->status }}</td>
                            </tr>
                        </tbody>
                        @endif
                        @endforeach
                        @endif
                    </div>
                    <div>
                    @if (auth()->user()->role == 0)    
                    @foreach ($pesanans as $pesanan)
                    @if ($pesanan->status=='Finished')
                    @if (auth()->user()->name == $pesanan->nama_pemesan)    
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3">{{ $pesanan->nama_pemesan }}</td>
                            <td class="px-4 py-3">{{ $pesanan->nama_produk }}</td>
                            <td class="px-4 py-3">{{ $pesanan->quantity }}</td>
                            <td class="px-4 py-3">Rp. {{ number_format($pesanan->total_harga) }}</td>
                            <td class="px-4 py-3">{{ $pesanan->status }}</td>
                        </tr>
                    </tbody>
                    @endif
                    @endif
                    @endforeach
                    @endif
                    </div>
                    <div>
                    @if (auth()->user()->role == 2)    
                    @foreach ($pesanans as $pesanan)
                    @if ($pesanan->status=='Finished')
                    @if (auth()->user()->id == $pesanan->mitra_id)    
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3">{{ $pesanan->nama_pemesan }}</td>
                            <td class="px-4 py-3">{{ $pesanan->nama_produk }}</td>
                            <td class="px-4 py-3">{{ $pesanan->quantity }}</td>
                            <td class="px-4 py-3">Rp. {{ number_format($pesanan->total_harga) }}</td>
                            <td class="px-4 py-3">{{ $pesanan->status }}</td>
                        </tr>
                    </tbody>
                    @endif
                    @endif
                    @endforeach
                    <p class="text-xl p-2">Total Penjualan : {{ number_format(auth()->user()->pendapatan) }}</p>
                    @endif
                    </div>
                </table>
            </div>
        </div>
      </div>
</html>