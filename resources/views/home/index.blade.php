@extends('layouts.main')

@section("container")
 
@endsection
@include('partials.fixed_nav')


<main>

  <div class="container marketing">

    <div class="row ms-auto me-auto">
      <div class="col-lg-4 ms-auto">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> --}}
        <h2 class="fw-normal">Mitra</h2>
        <p><a class="btn btn-secondary" href="/mitra/register">Register</a></p>
        <p><a class="btn btn-secondary" href="/mitra/login">Login</a></p>
      </div>
      <div class="col-lg-4">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> --}}
        <h2 class="fw-normal">Customer</h2>
        <p><a class="btn btn-secondary" href="/register">Register</a></p>
        <p><a class="btn btn-secondary" href="/login">Login</a></p>
      </div>
      <div class="col-lg-4">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg> --}}
        <h2 class="fw-normal">Admin</h2>
        <p><a class="btn btn-secondary" href="/admin/register">Register</a></p>
        <p><a class="btn btn-secondary" href="/admin/login">Login</a></p>
      </div>
    </div>

  </div>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
