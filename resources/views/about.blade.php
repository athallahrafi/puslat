@extends('layouts.main')
@section('container')
<div class="row disp mt-4 w-90">
    <div id="carouselExampleSlidesOnly" class="w-100 carousel slide mt-xxl-4" data-bs-ride="carousel" style="overflow:hidden;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/vehicle/carrousel.png" class="d-block" alt="excavator" style="max-height: 550px;width:100%;">
            </div>
            <div class="carousel-item">
                <img src="images/exca1.jpg" class="d-block" alt="excavator" style="max-height: 550px;width:100%;">
            </div>
            <div class="carousel-item">
                <img src="images/exca.jpg" class="d-block" alt="excavator" style="max-height: 550px;width:100%;">
            </div>
        </div>
    </div>
</div>
<div class="dsp">
    <div class="container text-center ">
        <div class="row d-flex justify-content-around mt-4">
            <div class=" d-flex flex-column justify-content-center align-items-center shadow-sm" style="width: 15rem;border-radius:15px;">
                <div class="d-flex justify-content-center align-items-center bg-dark" style="flex-basis: 20%;">
                    <img style="flex-basis:20%;" src="images/vehicle/exca_vehicle.png" class="d-flex flex-column card-img-top" alt="...">
                </div>
                <div style="flex-basis:20%;" class="card-body d-flex justify-content-center align-items-center">
                    <a href="#" style="font-weight:500;" class="card-title btn shadow-sm btn-warning h2 strong">Excavator</a>
                </div>
            </div>
            <div class=" d-flex flex-column justify-content-center align-items-center shadow-sm" style="width: 15rem;border-radius:15px;">
                <img style="flex-basis:80%;" src="images/vehicle/roller_vehicle.png" class="card-img-top" alt="...">
                <div style="flex-basis:20%;" class="card-body d-flex justify-content-center align-items-center">
                    <a href="#" style="font-weight:500;" class="card-title btn shadow-sm btn-warning h2 strong">Vibro Roller</a>
                </div>
            </div>
            <div class=" d-flex flex-column justify-content-center align-items-center shadow-sm" style="width: 15rem;border-radius:15px;">
                <img style="flex-basis:80%;" src="images/vehicle/bulldozer_vehicle.png" class="card-img-top" alt="...">
                <div style="flex-basis:20%;" class="card-body d-flex justify-content-center align-items-center">
                    <a href="#" style="font-weight:500;" class="card-title btn shadow-sm btn-warning h2 strong">Dozer</a>
                </div>
            </div>
            <div class=" d-flex flex-column justify-content-between align-items-center shadow-sm" style="width: 15rem;border-radius:15px;">
                <div class="d-flex flex-column justify-content-center align-items-center" style="flex-basis:80%;">
                    <img style="" src="images/vehicle/towing_vehicle.png" class="card-img-top" alt="...">
                </div>
                <div style="flex-basis:20%;" class="card-body d-flex flex-column justify-content-center align-items-center">
                    <a href="#" style="font-weight:500;" class="card-title btn shadow-sm btn-warning h2 strong">Towing Car</a>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-warning m-4 shadow" style="font-weight:500;">cari alat lain?</a>
    </div>
</div>
<div class="shadow-sm d-flex rounded-2 shadow p-4 gap-3 justify-content-center align-items-center flex-column text-center m-auto" style="height: 80vh;width:95vw;">
    <h1>Tentang</h1>
    <p style="font-size: 1.5rem;font-weight:500;">
        Pusat Sewa Alat Berat Banjarnegara melayani berbagai sewa alat berat di wilayah Indonesia<br>
        Khususnya Jawa Tengah, Jawa Barat, dan Jogjakarta. Fenomena yang sedang berlangsung saat ini<br>
        adalah pembangunan gedung terjadi di mana-mana, baik di perkotaan hingga ke pedesaan.<br>
        Apabila kita amati pembangunan yang dilakukan juga bukan pembangunan gedung atau bangunan<br>
        kecil namun pembangunan skala besar, misalnya pembangunan gedung perusahaan, hotel atau<br>
        tempat penginapan, rumah, sekolah, dan lain sebagainya yang tentu memerlukan bantuan armada<br>
        alat berat untuk proses pengerjaanya
    </p>
</div>
@endsection