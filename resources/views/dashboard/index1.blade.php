@extends('layouts.main')

@include('partials.fixed_nav')
@section("container")

<style>

body {
  overflow: hidden;
  background-color: #FF5C1B ;
}

.center {
  font-size: 3rem;
  z-index: 1;
}
.image {
  position: absolute;
  background-image: url('dashboard.png');
  background-repeat: no-repeat;
  background-size: contain;
  height: 300px;
  width: 700px;
  position: absolute;
  top: 250px;
  right: 590px;
  z-index: -1;
}
.image_1 {
  position: absolute;
  background-image: url('seed.png');
  background-repeat: no-repeat;
  background-size: contain;
  width: 1500px;
  height: 500px;
  position: absolute;
  top: 150px;
  right: -105px;
  z-index: -1;
}
.container {
  margin-bottom: 5px;
}

.button_shop {
  position: relative;
  top: 20px;
  right: 550px;
  border-radius: 50px;
  font-family: 'Inknut Antiqua', sans-serif;
  text-allign: center;
}

.btn {
  width: 200px;
  height: auto;
}

.card-body {
  padding: 30px;
}

@keyframes enter {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@media (max-width: 768px) {
  .my-element {
    top: 20px;
    right: 20px;
  }
}

@font-face {
    font-family: 'Montserrat Alternates';
    src: url('/fonts/your-font-file.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
  font-family: 'Inknut Antiqua';
  src: url('path/to/inknut-antiqua.woff2') format('woff2'),
       url('path/to/inknut-antiqua.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

.font-weight-bold {
  position: relative;
  text-align: center;
  font-size: 3rem;
  font-weight: 900;
  text-shadow: 4px 4px black;
  -webkit-text-fill-color: white;
  text-outline: 5px solid black;
  color: white;
  top: -100px;
  right: -100px;
}


</style>

<main>
  <div class="container mb-5">
    <div class="container d-flex align-items-center vh-100 center">
      <h1 class="mx-auto text-white text-center font-weight-bold" style="font-family: 'Montserrat Alternates', sans-serif;">Coffee you can trust <br>
        from seed to cup.</h1>
        <div class="button_shop">
          <p><a class="btn btn-outline-secondary bg-black text-white" style="border-radius:20px; height:50px;" href="/shop">SHOP NOW</a></p>
        </div>
      </div>
    <div class="row justify-content-center">
      <div class="background">
        <div class="image"></div>
        <div class="image_1"></div>
      </div>
      <div class="container mb-5">
      </div>
    </div>
  </div>
  
  <script>
  </script>
</main>
</html>

@endsection