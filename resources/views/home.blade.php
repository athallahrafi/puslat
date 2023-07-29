@extends('layouts.main')
@section('container')
<div class="row">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/exca.jpg" class="d-block w-100" alt="excavator" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="images/exca1.jpg" class="d-block w-100" alt="excavator" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="images/exca.jpg" class="d-block w-100" alt="excavator" style="max-height: 500px;">
            </div>
        </div>
    </div>
</div>
<div class="container text-center mt-4">
    <h2>{{ $name }}</h2>
    <div class="row d-flex justify-content-around mt-4">
        <div class="card" style="width: 15rem;">
            <img src="images/exca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <a href="#" class="card-title btn btn-primary">excavator</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="images/exca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <a href="#" class="card-title btn btn-primary">excavator</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="images/exca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <a href="#" class="card-title btn btn-primary">excavator</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="images/exca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                {{-- <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                <a href="#" class="card-title btn btn-primary">excavator</a>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary m-4">cari alat lain?</a>
</div>
<div class="text-center mt-4 bg-warning pb-4" id="#kontak">
    <div class="container mb-4">
        <h2>Kontak</h2>
        <p>Untuk seputar informasi lebih lanjut mengenai pembelian<br>mobil, truk, dan alat berat bisa langsung menghubungi kontak kami berikut ini.</p>
        <div class="column d-flex justify-content-around">
            <div class="bg-white container text-center">
                <div class="card" style="width: 15rem;">
                    <img src="fontawesome/svgs/brands/whatsapp.svg" class="card-img-top img-fluid w-50 m-auto" alt="whatsapp">
                    <div class="card-body">
                        <h5 class="card-title">Kontak</h5>
                        <p class="card-text">WhatsApp +62 853-2677-6766</p>
                        <a href="https://wa.me/+62853-2677-6766/" class="card-title btn btn-warning">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <div class="bg-white container text-center">
                <div class="card" style="width: 15rem;">
                    <img src="fontawesome/svgs/brands/instagram.svg" class="card-img-top img-fluid w-50 m-auto" alt="instagram">
                    <div class="card-body">
                        <h5 class="card-title">Instagram</h5>
                        <p class="card-text">@pulsatbanjarnegara_</p>
                        <a href="https://instagram.com/@pulsatbanjarnegara_" class="card-title btn btn-warning">Buka Sosmed</a>
                    </div>
                </div>
            </div>
            <div class="bg-white container text-center">
                <div class="card" style="width: 15rem;">
                    <img src="fontawesome/svgs/solid/location-dot.svg" class="card-img-top img-fluid w-50 m-auto" alt="location">
                    <div class="card-body">
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">Wanadri Patoman, Kec. Bawang, Kab. Banjanegara, Jawa Tengah 53471</p>
                        <a href="#" class="card-title btn btn-warning">Lihat Lokasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <b>
        &copy;<?=date('Y').' Pulsat Banjanegara #SewaDimanapunKapanpun'?>
    </b>
</div>
@endsection