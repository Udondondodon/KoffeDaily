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
            <div class="">
                <p class="text-center font-bold text-xl p-3">My Account</p>
                <div class="box-border h-auto p-3 mx-96 border-2 border-black grid-cols-2 grid">
                    @if (auth()->user()->role=='0')
                    <p class="text-lg my-2 text-center"><strong>Username :</strong> <br>{{ auth()->user()->username }}</p>
                    <p class="text-lg my-2 text-center"><strong>Email :</strong> <br>{{ auth()->user()->email }}</p>
                    <p class="text-lg my-2 text-center"><strong>Tanggal Lahir :</strong> <br>{{ auth()->user()->birthdate }}</p>
                    <p class="text-lg my-2 text-center"><strong>Phone Number :</strong> <br>{{ auth()->user()->phone_number }}</p>
                    <p class="text-lg my-2 text-center"><strong>Alamat :</strong> <br>{{ auth()->user()->address }}</p>
                    <p class="text-lg my-2 text-center"><strong>Kelurahan :</strong> <br>{{ auth()->user()->kelurahan }}</p>
                    <p class="text-lg my-2 text-center"><strong>Kecamatan :</strong> <br>{{ auth()->user()->kecamatan }}</p>
                    <p class="text-lg my-2 text-center"><strong>Kabupaten :</strong> <br>{{ auth()->user()->kabupaten }}</p>
                    <p class="text-lg my-2 text-center"><strong>Provinsi :</strong> <br>{{ auth()->user()->provinsi }}</p>
                    <p class="text-lg my-2 text-center"><strong>Password :</strong> <br>********</p>
                    @endif
                    @if (auth()->user()->role=='1')
                    <p class="text-lg my-2 text-center"><strong>Username :</strong> <br>{{ auth()->user()->username }}</p>
                    <p class="text-lg my-2 text-center"><strong>Email :</strong> <br>{{ auth()->user()->email }}</p>
                    <p class="text-lg my-2 text-center"><strong>Password :</strong> <br>********</p>                        
                    @endif
                    @if (auth()->user()->role=='2')
                    <p class="text-lg my-2 text-center"><strong>Username :</strong> <br>{{ auth()->user()->username }}</p>
                    <p class="text-lg my-2 text-center"><strong>Email :</strong> <br>{{ auth()->user()->email }}</p>
                    <p class="text-lg my-2 text-center"><strong>Phone Number :</strong> <br>{{ auth()->user()->phone_number }}</p>
                    <p class="text-lg my-2 text-center"><strong>Alamat :</strong> <br>{{ auth()->user()->address }}</p>
                    <p class="text-lg my-2 text-center"><strong>Kecamatan :</strong> <br>{{ auth()->user()->kecamatan }}</p>
                    <p class="text-lg my-2 text-center"><strong>Kabupaten :</strong> <br>{{ auth()->user()->kabupaten }}</p>
                    <p class="text-lg my-2 text-center"><strong>Provinsi :</strong> <br>{{ auth()->user()->provinsi }}</p>
                    <p class="text-lg my-2 text-center"><strong>Password :</strong> <br>********</p>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
