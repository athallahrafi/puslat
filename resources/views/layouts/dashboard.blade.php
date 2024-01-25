@extends('layouts.main')
@section('container')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
    </head>
    <body class="mb-5">
        <div class="conatienr mt-5">
            <h1 class="text-center mt-5">PLSAT Banjarnegara</h1>
            <div class="d-flex flex-row justify-content-between" style="height:20%;width:80%;margin:0 auto;gap:2;border:1px solid #000;">
                <div class="left d-flex flex-column bg-secondary" style="flex-basis:25%;height:inherit;">
                    <ul class="button-group d-flex flex-column justify-content-center align">
                        <a class="border border-dark border1" href="#">
                            <button class="btn">
                                Admin
                            </button>
                        </a>
                        <a class="border border-dark border1" href="#">
                            <button class="btn">
                                Alat berat
                            </button>
                        </a>
                        <a class="border border-dark border1" href="">
                            <button class="btn">
                                Pelanggan
                            </button>
                        </a>
                        <a class="border border-dark border1" href="">
                            <button class="btn">
                                Transaksi
                            </button>
                        </a>
                        <a class="border border-dark border1" href="" class="sidebar-menu-buttton">
                            <button class="btn">
                                Operator
                            </button>
                        </a>
                    </ul>
                    {{-- <ul class="list-group">
                        <li class="list-group-item bg-secondary">
                            <a href="#">
                                Admin
                            </a>
                        </li>
                        <li class="list-group-item bg-secondary">
                            <a href="#">
                                Alat berat
                            </a>
                        </li>
                        <li class="list-group-item bg-secondary">
                            <a href="">
                                Pelanggan
                            </a>
                        </li>
                        <li class="list-group-item bg-secondary">
                            <a href="">
                                Transaksi
                            </a>
                        </li>
                        <li class="list-group-item bg-secondary">
                            <a href="" class="sidebar-menu-buttton">
                                Operator
                            </a>
                        </li>
                    </ul> --}}
                </div>
                <div class="right d-flex flex-column bg-light" style="flex-basis:70%;height:inherit;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Alat</th>
                                <th>Merek</th>
                                <th>Gambar</th>
                                <th>Nama Alat Berat</th>
                                <th>Operator</th>
                                <th>Harga/Jam</th>
                                <th>Min Sewa</th>
                                <th>Harian Op</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vibro Roller</td>
                                <td>Merek</td>
                                <td>Vibro Roller</td>
                                <td>Gambar</td>
                                <td>Median</td>
                                <td>Rp.500.000</td>
                                <td>50 Jam</td>
                                <td>Rp.150.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </>
    </html>
@endsection