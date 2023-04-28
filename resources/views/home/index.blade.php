@extends('layouts.main')

@section("container")
 
@endsection
@include('partials.fixed_nav')


<style>
 /* Custom styles for landing page */
 .container {
  margin-top: 50px;
}

.card {
  background-color: #fff;
  border-radius: 15px;
  border: none;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  margin-bottom: 30px;
  transition: all 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.3);
}

.card-body {
  padding: 30px;
}

.btn {
  border-radius: 30px;
  font-weight: bold;
  font-size: 1.2rem;
  padding: 10px 30px;
  margin-top: 20px;
  width: 100%;
}

.btn-secondary {
  background-color: #4e342e;
  border-color: #4e342e;
}

.btn-outline-secondary {
  color: #4e342e;
  background-color: transparent;
  border-color: #4e342e;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
}

</style>

<main>

  <div class="container marketing">

    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="fw-normal">Mitra</h2>
            <p><a class="btn btn-outline-secondary" href="/mitra/register">Register</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="fw-normal">Customer</h2>
            <p><a class="btn btn-outline-secondary" href="/register">Register</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="fw-normal">Admin</h2>
            <p><a class="btn btn-outline-secondary" href="/admin/register">Register</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

