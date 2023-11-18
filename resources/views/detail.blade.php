@extends('layouts.main')
@section('container')
<div class="container d-flex flex-row justify-content-center align-items-center">
    <div class="column">
        <div class="bc">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
            </nav>
        </div>
        <div class="">
            <div class="card d-flex flex-row">
            <img src="images/exca.jpg" class="card-img-top" alt="..." style="width: 40%">
            <div class="card-body">
                <h5 class="card-title">Roller</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex flex-row justify-content-around align-items-center">
                    <p class="text-center">Harga Per Jam<br>Rp.200.000</p>
                    <p class="text-center">Minimum Sewa<br>50 Jam</p>
                    <p class="text-center">Harian Operator<br>Rp. 200.000</p>
                </div>
                <a href="#" class="btn btn-warning">Sewa Sekarang</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection