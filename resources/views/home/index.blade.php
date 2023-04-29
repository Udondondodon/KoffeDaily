@extends('layouts.main')

@section("container")
 
@endsection
@include('partials.fixed_nav')


<style>
 body {
  overflow: hidden;
}

 .background {
  background-color: #c0c0c0;
  height: 1080px;
  width: 1920px;
  position: absolute;
}

.image {
  background-image: url('img/home2.jpg');
  background-repeat: no-repeat;
  background-size: contain;
  height: 200px;
  width: 200px;
  position: absolute;
  top: 10%;
  right: 0;
  transform: translateY(-50%);
}
 .container {
  margin-bottom: 5px;
}

.card {
  background-color: #fff;
  border-radius: 15px;
  border: none;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  margin-bottom: 30px;
  transition: all 0.3s ease-in-out;
  top: 250px;
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
  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="background">
        <div class="image"></div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="fw-normal"></h2>
            <p><a class="btn btn-outline-secondary" href="/admin/register">Login</a></p>
            <p><a class="btn btn-outline-secondary" href="/admin/register">Register</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>  
  </body>
</main>
</html>

