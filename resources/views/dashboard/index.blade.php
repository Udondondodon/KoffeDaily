@extends('layouts.main')

@include('partials.fixed_nav')
{{-- @section("container") --}}

<style>
@font-face {
    font-family: 'Montserrat Alternates';
    src: url('/fonts/your-font-file.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
  font-family: 'Inknut Antiqua';
  src: url('path/to/inknut-antiqua.woff2') format('woff2'),
       url('path/to/inknut-antiqua.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

.font-weight-bold {
  position: relative;
  text-align: center;
  font-size: 3rem;
  font-weight: 900;
  text-shadow: 4px 4px black;
  -webkit-text-fill-color: white;
  text-outline: 5px solid black;
  color: white;
}
</style>

<html class="overflow-hidden">
    <main class="bg-orange-500 w-screen h-screen top-0 fixed">
        <div class="top-80 relative text-center z-1">
            <h1 class="text-white text-5xl font-weight-bold" style="font-family: 'Montserrat Alternates', sans-serif;">Coffee you can trust <br> from seed to cup.</h1>
            <a href="/shop">
                <button class="bg-black text-white w-52 h-14 rounded-3xl mt-4 text-2xl" style="font-family: 'Inknut Antiqua', sans-serif;">Shop Now</button>
            </a>
        </div>
        <div class="flex justify-center top-12 relative">
            <img class="w-80 h-72 max-w-full" src="dashboard.png" alt="">
            <img class="h-auto" src="seed.png" alt="" style="width: 50rem">
        </div>
    </main>
</html>

{{-- @endsection --}}