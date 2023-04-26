@extends('layouts.main')
{{-- @include('partials.fixed_nav') --}}
@section("container")

@endsection


<div class ='row justify-content-center'>
  <main class="col-lg-4 mt-3">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

      <form action='/login' method ='post'>
        @csrf
        <h1 class="h3 fw-normal text-center">Please Log In</h1>
        <div class="form-floating">
          <input type="username" name="username" class="form-control" id="username" placeholder="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" name='password' class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class='d-block text-center mt-3'>Not registered? <a href="/register">Register Now</a></small>
    </main>
</div>