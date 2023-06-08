@extends('layouts.main')
@include('partials.fixed_nav')

<html>
  <body>
      <div class="">
        <div class="p-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <table class="table-auto w-full">
                    <thead class="bg-blue-500 text-white shadow-lg">
                        <tr>
                            <th class="py-3 px-4 text-left">Nama Artikel</th>
                            <th class="py-3 px-4 text-left">Pemilik Artikel</th>
                            <th class="py-3 px-4 text-left">Lihat Artikel</th>
                            <th class="py-3 px-4 text-left">Edit Artikel</th>
                            <th class="py-3 px-4 text-left">Hapus Artikel</th>
                        </tr>
                    </thead>
                    @foreach ($artikels as $artikel)
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-3">{{ $artikel->judul }}</td>
                            <td class="px-4 py-3">{{ $artikel->owner }}</td>
                            <td class="px-4 py-3">
                            <a href="{{ url('artikel') }}/{{ $artikel->id }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white rounded-xl w-24">Lihat</button>  
                            </a>  
                            </td>
                            <td class="">
                                <a href="{{ url('editlearn')}}/{{ $artikel->id }} ">
                                    <button class="bg-gray-500 hover:bg-gray-700 text-white rounded-xl w-24 mx-4">Edit</button>
                                </a>
                            </td>
                            <td class="">
                                <a href="{{ url('deletelearn')}}/{{ $artikel->id }} ">
                                    <button class="bg-red-500 hover:bg-red-700 text-white rounded-xl w-24 mx-3">Hapus</button>
                                </a>
                            </td>
                        </tr>
                      </tbody>
                      {{-- @endif --}}
                      @endforeach
                    </table>
                  </div>
                  <a href="/article">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mx-96 items-center relative text-center top-11">Buat Artikel</button>
                  </a>
        </div>
      </div>
    </body>
</html>


{{-- <html>
  <body>
    <div>
      <h1 class="text-7xl text-center">Daftar Artikel</h1>
    </div>
    <div class="text-start">
      <table class="table-auto w-full">
        <thead class="bg-blue-500 text-white shadow-lg">
          <tr>
            <th class="py-3 px-4 text-left">Nomor</th>
            <th class="py-3 px-4 text-left">Judul</th>
            <th class="py-3 px-4 text-left">Pemilik Artikel</th>
          </tr>   
        </thead>
        @foreach ($artikels as $artikel)
        @if ($artikel->image)
        <tbody>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">
              <div class="my-10">
                <a class="text-4xl text-blue-700 underline text-center" href="{{ url('artikel') }}/{{ $artikel->id }}">{{ $artikel->judul }}</a>
              </div> 
            </td>
          </tr>
        </tbody>
        @endif
        @endforeach
      </table>
    </div>
  </body>
</html> --}}


