    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @import url('https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@500&display=swap');

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .logo {
      position: relative;
      width: 150px;
      height: auto;
      top: 20px;
      }

      .cup {
      width: 50px;
      height: auto;
      margin-top: -2px;
      }

    .navbar-brand img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      }

    .navbar {
      height: 70px;
      background-color: 000F8F;
      }

    .navbar {
      font-size: 1.5rem;
      padding-top: 20px;
      padding-bottom: 20px;
      }
    </style>

    
    {{-- <link href="navbar-fixed.css" rel="stylesheet"> --}}
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed top-0 w-screen z-10">
      <div class="container-fluid">
        <a class="navbar-brand cup" href="/home">
          <i class="bi bi-cup-hot text-white" style="font-size: 3rem;"></i>
        </a>
        <ul class="navbar-nav me-auto ms-auto">
          <li class="nav-item">
            <a class="nav-link text-light font shop" href="/shop">Shop</a>
          </li>
        </ul>
        <a class="navbar-brand logo" href="/home">
          <img src="/logo_w.png" alt="Logo">
        </a>
        <ul class="navbar-nav ms-auto me-auto">
          <li class="nav-item">
            <a class="nav-link text-light font" href="/learn">Learn</a>
          </li>
        </ul>
          @auth
          <li class="navbar dropdown">
            <a class="nav-link dropdown ms-auto" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle text-white" style="font-size: 3rem;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <a href="/akun">
                <button type='submit' class="dropdown-item bi bi-person-circle">Lihat Akun</button>
              </a>
              {{-- @if (auth()->user()->role=='1' || auth()->user()->role=='2')
              <a href="/income">
                <button type='submit' class="dropdown-item bi bi-cash-coin">Pendapatan</button>
              </a>
              @endif --}}
              <a href="/history">
                <button type='submit' class="dropdown-item bi bi-cash-coin">Riwayat Penjualan</button>
              </a>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type='submit' class="dropdown-item bi bi-box-arrow-right">Log out</button>
              </form>
            </ul>
          </li>
          @else
          <a class="nav-link text-light font" href="/login">Login</a>
          @endauth
        </div>
      </div>
    </nav>
  </div>
  </body>