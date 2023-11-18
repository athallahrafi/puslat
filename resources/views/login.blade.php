@extends('layouts.main')
@section('container')
<div class="d-flex flex-row justify-content-center align-items-center w-100 " style="height:100vh;">
    <div class="box-image d-flex flex-column justify-content-center align-items-center" style="flex-basis: 50%;height:80% vh;">
        <img src="images/vehicle/login.png" style="width:400px;" alt="">
    </div>
    <div class="box-form d-flex flex-column justify-content-center align-items-center" style="flex-basis:50%; height:80%;">
        <form action=""  method="post" style="width:60%;height: 60vh;" class="shadow rounded-4 border border-1 border-warning ">
            <div class="p-4 w-100 d-flex flex-column align-items-center justify-content-center gap-3">
                <h3 class="text-center">Login</h3>
                <input type="text" class="form-control border-warning" name="username" id="username" placeholder="username">
                <input type="password" class="form-control border-warning" name="password" id="password" placeholder="password">
                <input type="submit" class="form-control bg-warning fw-bold shadow" value="Login">
                <p>Atau login dengan</p>
            </div>
            <div class="w-100 text-center d-flex flex-row justify-content-center align-items-center" style="border-top: 4px solid var(--primary-color);height:40px;">Belum Punya Akun? <a href="/daftar">Daftar</a></div>
        </form>
    </div>
</div>
@endsection