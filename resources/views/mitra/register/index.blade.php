@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")


<style>
  body {
    background-image: url('coffee-background.jpg');
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
    max-height: 100px;
  }
  

  .background {
    position: absolute;
    z-index: -1;
  background-color: #387FC7 ;
  height: 1300px;
  width: 1920px;
  top: -100px;
  right: -15px;
}
form {
  max-width: 450px;
    margin: 0 auto;
    background-color: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    animation: slide-up 0.9s ease;
    margin-top: 10px;
  }
  
  input[type="text"],
  input[type="email"], 
  input[type="date"], 
  input[type="password"] {
    font-size: 16px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    background-color: #f5f5f5;
  }
  
  input[type="text"]:focus,
  input[type="email"]:focus 
  input[type="password"]:focus {
    outline: none;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  }
  
  button[type="submit"] {
    font-size: 18px;
    color: #fff;
    background-color: #8d6e63;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  button[type="submit"]:hover {
    background-color: #795548;
  }
  
  @media only screen and (max-width: 600px) {
    form {
      padding: 20px;
    }
  }
  
  @keyframes slide-up {
    from {
      transform: translateY(50%);
      opacity: 0;
    }
    
    to {
      transform: translateY(0%);
      opacity: 1;
    }
  }
  </style>

  <div class ='row justify-content-center'>
    <div class= " col-lg-4 mt-3">
      <div class="background">
        <div class="image"></div>
      </div>
      <main class="form-registration">
      <form action="/mitra/register" method="post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 mt-3 fw-normal text-center">Register Now</h1>
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
          <div class="mb-3 mt-2">
            <label for="image" class="form-label">QRIS</label>
            <input class="form-control @error('password') is-invalid @enderror" type="file" id="image" name="image">
          </div>
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          <input type="hidden" name="role" value="2">
          <button class="w-100 btn btn-lg btn-primary mt-3"type="submit">Register</button>
          <small class='d-block text-center mt-3'>Already have account? <a href="/login">Login Now</a></small>
        </form>
      </main>
    </div>
  </div>
  @endsection