@extends('layouts.main')
@include('partials.fixed_nav')

<div class ='row justify-content-center'>
    <div class= " col-lg-4 mt-3">
    <main class="form-registration">
        <h1 class="h3 mb-3 mt-3 fw-normal text-center">Buat Artikel</h1>
        <form action="{{ url('updatelearn') }}/{{ $artikels->id }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-floating">
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul" required value="{{ old('judul', $artikels->judul) }}">
            <label for="judul">Judul Artikel</label>
            @error('judul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <textarea class="h-40 w-96" name="isi" class="form-control @error('isi') is-invalid @enderror" id="isi" placeholder="Isi" required>{{ old('isi', $artikels->isi) }}</textarea>
            <label class="mx-1" for="isi"></label>
            @error('isi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 relative justify-center items-center flex">Buat Artikel</button>
          </div>
        </form>
      </main>
    </div>
  </div>