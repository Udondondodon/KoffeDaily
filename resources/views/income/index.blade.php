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
                <a href="/income">
                    <p class="text-start">PENDAPATAN</p>
                </a>
            </div>
            <div class="text-center justify-center">
                @if (auth()->user()->role ==1)
                <h1 class="text-7xl mx-36">total pendapatan anda adalah {{ $pendapatans->pendapatan }}</h1>
                @endif
                @if (auth()->user()->role==2)
                <h1 class="text-7xl mx-36">total pendapatan anda adalah {{ number_format(auth()->user()->pendapatan) }}</h1>
                @endif
            </div>
        </div>
    </body>
</html>