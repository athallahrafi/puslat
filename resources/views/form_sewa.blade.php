@extends('layouts.main')
@section('container')
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="container mt-5 d-flex flex-column align-items-sm-start" style="height: 10vh;overflow:hidden;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="d-flex flex-column" style="height:10vh;">
            <ol class="breadcrumb d-flex flex-row justify-content-center align-items-center" style="height:10vh;">
                <li style="font-size: 1.2rem;" class="breadcrumb-item"><a href="/">Home</a></li>
                <li style="font-size: 1.2rem;" class="breadcrumb-item active" aria-current="/vehicle">Vehicle</li>
            </ol>
        </nav>
    </div>
    <h1 class="text-center mb-5">Isi data Penyewa</h1>
    <div class="shadow-sm rounded-3 d-flex flex-row justify-content-around p-2" style="width:85vw;">
        <div class="left p-3 rounded-2 shadow-sm" style="flex-basis:50%;background: var(--secondary-color);"style="width:85vw;">
            <img src="images/vehicle/roller.png" class="d-flex rounded-2 flex-column align-self-center" alt="..." style="width: 50%vw;margin:0 auto;">
            <div class="card-body p-4">
                <h5 class="card-title" style="font-weight: 5000;">Roller</h5>
                <p style="font-size:1.3rem; font-weight: 500;" class="card-text">5-ton Mini Excavator PC-75</p>
                <sapn style="font-size:1.3rem; font-weight: 500;">Minimum Sewa</sapn><br>
                <p style="font-size: 1.3rem;">50 Jam</p>
                <span style="font-size:1.3rem; font-weight: 500;">Harga Per Jam</span><br>
                <p style="font-size: 1.3rem;">Rp.200.000</p>
            </div>
        </div>
        <div class="right d-flex flex-column justify-content-between p-4 gap-5" style="flex-basis:50%;">
            <div class="data-penyewa d-flex flex-column justify-content-around" style="flex-basis:50%;">
                <form action="" method="post" class="d-flex flex-column justify-content-around gap-3">
                    <h3 class="text-center">Data Penyewa</h3>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="perusahaan">Perusahaan</label>
                        <input type="text" name="perusahaan" id="perusahaan" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="nohp">No HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control border border-warning">
                    </div>
                </form>
            </div>
            <div class="detail-alat d-flex flex-column justify-content-around" style="flex-basis:50%;">
                <h3 class="text-center">Detail Alat</h3>
                <span class="nama-alat text-center" style="font-weight: 500;font-size:1.3rem;margin: 1rem auto;">5-ton Mini Excavator PC-75</span>
                <form action="" method="post" class="d-flex flex-column justify-content-around gap-3">
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="tanggal-mulai">Tanggal Mulai</label>
                        <input type="date" name="tanggal-mulai" id="tanggal-mulai" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="lama_sewa">Lama Sewa</label>
                        <input type="time" name="lama_sewa" id="lama_sewa" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="tanggal-selesai">Tanggal Selesai</label>
                        <input type="date" name="tanggal-selesai" id="tanggal-selesai" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row">
                        <label style="flex-basis:40%; font-weight:500; font-size:1.3rem;" for="lokasi-proyek">Lokasi Proyek</label>
                        <input type="text" name="lokasi-proyek" id="lokasi-proyek" class="form-control border border-warning">
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <a href="#" class="btn btn-warning shadow" style="font-weight: 500;">Sewa Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection