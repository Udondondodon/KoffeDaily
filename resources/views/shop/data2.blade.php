@extends('layouts.main')
@include('partials.fixed_nav')

<html>
    <body>
        <div class="grid grid-cols-2 gap-5">
            <img class="w-9/12 h-auto relative p-16 my-10 mx-5 border border-black bg-blue-300" src="{{ asset('storage/' . $barangs->image) }}">
            <img class="w-9/12 h-auto relative p-16 my-10 mx-5 border border-black bg-blue-300" src="{{ asset('storage/' . $barangs->image) }}">
        </div>
    </body>
</html>