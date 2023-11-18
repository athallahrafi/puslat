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
    <link href="datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="datatables/jquery.dataTables.min.css">
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="datatables/jquery.dataTables.js"></script>

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
      <div class="column mt-5">
        @yield('container')
      </div>
      <div class="text-center mt-4 pb-4" id="#kontak" style="background-color: var(--primary-color);">
        <div class="container mb-4">
            <h1 class="pt-4">Kontak</h1>
            <p style="font-weight:500;font-size:1.3rem;">Untuk seputar informasi lebih lanjut mengenai pembelian<br>mobil, truk, dan alat berat bisa langsung menghubungi kontak kami berikut ini.</p>
            <div class="column d-flex justify-content-around align-items-center bg-white" style="height:350px;border-radius:15px;">
            {{-- <div class="column d-flex  bg-light" style="border:1px solid #000;"> --}}
                <div class="bg-white d-flex align-items-center  text-center" style="height:300px;">
                    <div class="d-flex flex-column justify-content-between" style="width: 15rem;height:100%;">
                        <div class="d-flex justify-content-center align-items-center" style="height:50%; width:100%;">
                            <img src="images/whatsapp.png" alt="">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-around align-items-center flex-basis-50">
                            <h5 class="card-title text-center d-flex">Kontak</h5>
                            <p class="card-text">WhatsApp +62 853-2677-6766</p>
                            <a href="https://wa.me/+62853-2677-6766/" class=" btn btn-warning shadow" style="font-weight: 500;">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white d-flex align-items-center  text-center" style="height:300px;">
                    <div class="d-flex flex-column justify-content-between" style="height:100%;width:15rem;">
                        <div class="d-flex align-items-center justify-content-center" style="height:50%;">
                            <img src="images/instagram.png" alt="">
                        </div>
                        {{-- <img src="fontawesome/svgs/brands/instagram.svg" class="card-img-top img-fluid w-50 m-auto" alt="instagram"> --}}
                        <div class="d-flex flex-column justify-content-around" style="height:50%;">
                            <h5 class="">Instagram</h5>
                            <p class="">@puslatbanjarnegara_</p>
                            <a href="https://instagram.com/@puslatbanjarnegara_" class=" btn btn-warning shadow" style="font-weight: 500;">Buka Sosmed</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white d-flex align-items-center  text-center" style="height:300px;">
                    <div class="d-flex flex-column justify-content-between" style="width: 15rem;height:100%;">
                        <div class="d-flex justify-content-center align-items-center" style="height:50%; width:100%;">
                            <img src="images/point.png" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h5 class="">Alamat</h5>
                            <p class="">Wanadri Patoman, Kec. Bawang, Kab. Banjanegara, Jawa Tengah 53471</p>
                            <a href="#" class="btn btn-warning shadow" style="font-weight: 500;">Lihat Lokasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map d-flex flex-row justify-content-between align-items-center p-4">
      <div class="d-flex flex-column">
        <h1 class="text-center">Selamat Datang di</h1>
        <img src="images/logo_puslat.png" alt="">
      </div>
      <img src="images/peta.png" alt="" style="width:40%;">
    </div>
    <div class="d-flex flex-column align-items-center justify-content-center bg-dark text-light" style="height:10vh;">
        <b style="font-size: 1.2rem;">
            &copy;<?=date('Y').' Puslat Banjanegara #SewaDimanapunKapanpun'?>
        </b>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <script src="bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="datatables/dataTables.bootstrap.js"></script> --}}
  </body>
</html>