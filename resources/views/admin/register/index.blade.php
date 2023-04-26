@extends('layouts.main')

@section("container")

{{-- @include('partials.fixed_nav') --}}

<div class ='row justify-content-center'>
  <div class= " col-lg-4 mt-3">
  <main class="form-registration">
      <h1 class="h3 mb-3 mt-3 fw-normal text-center">Register Now</h1>
      <form action="/admin/register" method="post">
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
            <input type="text" name="divisi" class="form-control @error('divisi') is-invalid @enderror" id="divisi" placeholder="divisi" required value="{{ old('divisi') }}">
            <label for="divisi">Divisi</label>
            @error('divisi')
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
        <input type="hidden" name="role" value="1">
        <button class="w-100 btn btn-lg btn-primary mt-3"type="submit">Register</button>
      </form>
      <small class='d-block text-center mt-3'>Already have account? <a href="/login">Login Now</a></small>
    </main>
  </div>
</div>

@endsection
