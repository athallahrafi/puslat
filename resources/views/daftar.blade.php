@extends('layouts.main')
@section('container')
<div class="container mt-5 d-flex flex-column w-100 justify-content-center align-items-around" style="height: 100vh;">
    <div class="shadow rounded-3 p-4 d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
        <h3 class="text-center">Daftar</h3>
        <form action="" method="post" style="height: 60vh;width:80vw;" class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-row justify-content-center align-items-center gap-4" style="width:70vw;">
                <div class="left d-flex flex-column w-50 justify-content-start align-items-center gap-4" style="height:40vh;">
                    <input type="text" class="form-control border-warning" name="nama" id="nama" placeholder="nama">
                    <input type="email" class="form-control border-warning" name="email" id="email" placeholder="email">
                    <input type="tel" class="form-control border-warning" name="nohp" id="nohp" placeholder="nohp">
                    <input type="text" class="form-control border-warning" name="alamat" id="alamat" placeholder="alamat">
                </div>
                <div class="right d-flex flex-column w-50 justify-content-start align-items-center gap-4" style="height: 40vh;">
                    <input type="text" class="form-control border-warning" name="username" id="username" placeholder="username">
                    <input type="password" class="form-control border-warning" name="password" id="password" placeholder="password">
                    <input type="password" class="form-control border-warning" name="password" id="password" placeholder="password">
                    <span class="text-center">Atau login dengan</span>
                    <div class="d-flex flex-row w-100">
                        <div class="autologin" style="flex-basis:50%;">
                            <img src="" alt="" class="logo">
                            <p></p>
                        </div>
                        <div class="autologin" style="flex-basis:50%;">
                            <img src="" alt="" class="logo">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="form-control shadow-sm bg-warning fw-bold" value="Daftar" style="width:20%;margin:0 auto;background: var(--primary-color);">
        </form>
    </div>
</div>
@endsection