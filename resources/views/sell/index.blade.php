@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")

<div class ='row justify-content-center'>
    <div class= " col-lg-4 mt-3">
    <main class="form-registration">
        <h1 class="h3 mb-3 mt-3 fw-normal text-center">Daftarkan Produk</h1>
        <form action="/sell" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama Produk</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Stok" required value="{{ old('stok') }}">
            <label for="stok">Stok</label>
            @error('stok')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" required>{{ old('deskripsi') }}</textarea>
            <label for="deskripsi">Deskripsi</label>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" required value="{{ old('harga') }}">
            <label for="harga">Harga</label>
            @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" id="berat" placeholder="Berat" required value="{{ old('berat') }}">
            <label for="berat">Berat</label>
            @error('berat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="date" name="expired" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="date" required value="{{ old('expired') }}">
            <label for="date">Expired Date</label>
            @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
            <div class="mb-3 mt-2">
              <label for="image" class="form-label">Foto Barang</label>
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            </div>
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 relative justify-center items-center flex">Daftarkan Barang</button>
          </div>
        </form>
      </main>
    </div>
  </div>

{{-- @endsection --}}