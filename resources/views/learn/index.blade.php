@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")
<style>

    body {
      overflow: hidden;
      /* background-color: #FF5C1B ; */
    }
    
    .center {
      font-size: 3rem;
      z-index: 1;
    }

    .p {
        z-index: 1;
    }
    .image {
      position: absolute;
      background-image: url('learn1.png');
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
      text-shadow: 4px 4px white;
      -webkit-text-fill-color: black;
      text-outline: 5px solid white;
      color: black;
      top: -100px;
      right: -100px;
    }
    
    
    </style>
    
    <main>
      <div class="container mb-5">
        <div class="container d-flex align-items-center vh-100 ">
          <h1 class="mx-auto text-center font-weight-bold center" style="font-family: 'Montserrat Alternates', sans-serif;">Flores: Indonesia - Australia <br></h1> <br>
        </div>
        <div class="row justify-content-center">
            <p>Flores merupakan daerah yang iklimnya istimewa, karena pengaruh dari perpaduan antara iklim tropis Indonesia, dan subtropics Australia sehingga menghasilkan lingkungan yang khas. Karena pengaruh hal inilah kopi Flores dapat memiliki cita rasa yang unik dan khas. Kopi Flores memiliki aroma bunga, caramel, kacang – kacangan dengan ditambah sensasi rasa tembakau, menjadikan kopi ini adalah salah satu kopi yang unik di Indonesia.</p>
            <div class="image"></div>
        </div>
      </div>
      
      <script>
      </script>
    </main>
    </html>
    
@endsection