@extends('layouts.main')
@include('partials.fixed_nav')

<html>
    <body>
        <div class="grid grid-cols-2">
            <div class="flex justify-center my-44">
                <img class="w-96 h-96" src="{{ asset('storage/' . $artikels->image) }}" alt="">
            </div>
            <div class="mx-10">
                <h1 class="text-center text-7xl my-5 ">{{ $artikels->judul }}</h1>
                <h1 class="text-xl text-justify">{{ $artikels->isi }}</h1>
            </div>
            <div class="max-w-7xl mx-auto h-auto">
            </div>
        </div>
    </body>
</html>

