<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@400;500;700&family=Satisfy&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" />

    <title>SiWON - Workout Online</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand brand ms-3" href="/">Workout Online</a>
        <button
          class="navbar-toggler me-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/programs">Programs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/workout">Workout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/healthy-foods">Healthy Foods</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-danger" href="/auth/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <div class="container-fluid footer">
      <div class="container">
        <div class="row mt-5 py-5">
          <div class="col-lg-3 col-sm-12 mb-4 text-start text-md-center">
            <a class="brand fs-4" href="#">Workout Online</a>
          </div>
          <div class="col-lg-3 col-sm-12 mb-4">
            <h6>Get Started</h6>
            <ul>
              <li><a href="">Perkenalan</a></li>
              <li><a href="">Pemanasan dan Peregangan</a></li>
              <li><a href="">Memilih Program</a></li>
              <li><a href="">Rencana Latihan</a></li>
              <li><a href="">Memilih Resep Makanan</a></li>
              <li><a href="">Memilih Meal Plan</a></li>
              <li><a href="">Saran dan Masukan</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-12 mb-4">
            <h6>Fitur & Kategori</h6>
            <ul>
              <li><a href="">Program</a></li>
              <li><a href="">Workout</a></li>
              <li><a href="">Healthy Foods</a></li>
              <li><a href="">Unduh Poster</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-12">
            <h6>Sosial Media</h6>
            <ul>
              <li><a href="">Instagram</a></li>
              <li><a href="">Facebook</a></li>
              <li><a href="">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="row pb-4 text-muted">
          <small class="text-center small">Copyright | SiWON 2021</small>
        </div>
      </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
