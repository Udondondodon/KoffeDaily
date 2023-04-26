@extends('layouts.main')
{{-- @include('partials.fixed_nav') --}}
@section("container")

@endsection



  <div class ='row justify-content-center'>
    <div class= " col-lg-4 mt-3">
    <main class="form-registration">
        <h1 class="h3 mb-3 mt-3 fw-normal text-center">Register Now</h1>
        <form action="/register" method="post">
            @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama Lengkap</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="date" name="birthdate" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="date" required value="{{ old('birthdate') }}">
            <label for="date">Tanggal lahir</label>
            @error('date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Enter phone number" required value="{{ old('phone_number') }}">
            <label for="phone_number">No. Telepon</label>
            @error('phone_number')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
            <div class="form-floating">
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="alamat" placeholder="alamat" required value="{{ old('address') }}">
              <label for="alamat">Alamat</label>
              @error('alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan" placeholder="kelurahan" required value="{{ old('kelurahan') }}">
              <label for="kelurahan">Kelurahan</label>
              @error('kelurahan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" placeholder="kecamatan" required value="{{ old('kecamatan') }}">
              <label for="kecamatan">Kecamatan</label>
              @error('kecamatan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten" placeholder="kabupaten" required value="{{ old('kabupaten') }}">
              <label for="kabupaten">Kota / Kabupaten</label>
              @error('kabupaten')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="form-floating">
            <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" placeholder="provinsi" required value="{{ old('provinsi') }}">
            <label for="provinsi">Provinsi</label>
            @error('provinsi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
            <label for="name">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <input type="hidden" name="role" value="0">
          <button class="w-100 btn btn-lg btn-primary mt-3"type="submit">Register</button>
        </form>
        <small class='d-block text-center mt-3'>Already have account? <a href="/login">Login Now</a></small>
      </main>
    </div>
  </div>