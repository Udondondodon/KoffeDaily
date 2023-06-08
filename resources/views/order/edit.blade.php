@extends('layouts.main')
@include('partials.fixed_nav')

<div class ='row justify-content-center'>
    <div class= " col-lg-4 mt-3">
    <main class="form-registration">
        <h1 class="h3 mb-3 mt-3 fw-normal text-center">Buat Artikel</h1>
        <form action="{{ url('ubah1') }}/{{ $biaya->id }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-floating">
            <input type="text" name="namabiaya" class="form-control @error('namabiaya') is-invalid @enderror" id="namabiaya" placeholder="Nama Biaya" required value="{{ old('namabiaya', $biaya->namabiaya) }}">
            <label for="namabiaya">Nama Biaya</label>
            @error('namabiaya')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="nominal" class="form-control @error('nominal') is-invalid @enderror" id="nominal" placeholder="Nominal" required value="{{ old('nominal', $biaya->nominal) }}">
            <label for="nominal">Nominal</label>
            @error('nominal')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 relative justify-center items-center flex">Ubah Biaya</button>
          </div>
        </form>
      </main>
    </div>
  </div>