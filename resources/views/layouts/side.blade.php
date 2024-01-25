<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="refresh" content="5" /> --}}
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="datatables/dataTables.bootstrap.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="jquery/jquery-3.5.1.min.js"></script>
    {{-- <link rel="stylesheet" href="datatables/jquery.dataTables.min.css">
    <script src="datatables/jquery.dataTables.js"></script> --}}
    <link rel="stylesheet" href="datatables/datatables.css">
    <script src="datatables/datatables.min.js"></script>

    <title>Home | {{ $title }}</title>
    <style>
      :root{
        --primary-color:#FDBA06;
        --secondary-color:#E7E7E7;
      }
      *{
        /* border: 1px solid #000; */
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin: 0 0 2rem;">
        <div class="container d-flex justify-content-between">
          <div class="left">
            <img src="images/puslat_logo.png" style="height: 12vh;" alt="">
          </div>
          <div class="right" style="font-size: 1.2rem;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                @if ($title=="Home")
                <a class="nav-link bg-warning text-dark" style="font-weight: 500;border-radius:15px;" aria-current="page" href="/">Beranda</a>
                @else
                <a class="nav-link text-warning" aria-current="page" href="/">Beranda</a>
                @endif
                @if ($title=="Alat Berat")
                <a class="nav-link bg-warning text-dark" style="font-weight: 500;border-radius:15px;" href="{{ '/vehicle' }}">Alat Berat</a>
                @else
                <a class="nav-link text-warning" href="{{ '/vehicle' }}">Alat Berat</a>
                @endif
                @if ($title=="Kontak")
                <a class="nav-link bg-warning text-dark" href="#kontak">Kontak</a>
                @else
                <a class="nav-link text-warning" href="#kontak">Kontak</a>
                @endif
                @if ($title=="Tentang")
                <a class="nav-link bg-warning text-dark" style="font-weight: 500;border-radius:15px;" href="{{ '/about' }}">Tentang</a>
                @else
                <a class="nav-link text-warning" href="{{ '/about' }}">Tentang</a>
                @endif
                <a class="nav-link text-light " href="#">
                  <span class="text-warning">|</span>
                </a>
                <a class="nav-link text-dark bg-warning" style="border-radius: 15px;font-weight:500;" href="/login">Login</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
          <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-enone" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"/></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"/></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"/></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"/></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"/></svg>
            </a>
          </li>
        </ul>
        <div class="dropdown border-top">
          <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
        @yield('container')
      </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <script src="bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="datatables/dataTables.bootstrap.js"></script> --}}
  </body>
</html>