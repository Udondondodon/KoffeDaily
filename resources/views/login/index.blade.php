@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")

@endsection

<style>
  body {
    background-image: url('coffee-background.jpg');
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
  }
  
  form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    animation: slide-up 0.9s ease;
    margin-top: 150px;
  }
  
  input[type="username"],
  input[type="password"] {
    font-size: 16px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
    background-color: #f5f5f5;
  }
  
  input[type="username"]:focus,
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
        <h1 class="h3 fw-normal text-center">Log In</h1>
        <div class="form-floating">
          <input type="username" name="username" class="form-control" id="username" placeholder="username" required value="{{ old('username') }}">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" name='password' class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small class='d-block text-center mt-3'>Not registered? <a href="/register">Register Now</a></small>
      </form>
    </main>
</div>