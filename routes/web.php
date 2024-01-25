<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Auth;
use App\Http\Controllers\Vehicle;
use App\Http\Controllers\Transaction;
use App\Http\Controllers\Home;
Route::get('/side', function () {
    return view('layouts/side',['title'=>'side']);
});
Route::get('/dashboard', function () {
    return view('layouts/dashboard',['title'=>'dashboard']);
});
Route::get('/', [Home::class, 'index']);
Route::get('/about', [Home::class, 'about']);
Route::get('/login', [Auth::class, 'index']);
Route::get('/daftar', [Auth::class, 'daftar']);
Route::get('/logout', [Auth::class, 'logout']);
Route::get('/vehicle', [Vehicle::class, 'index']);
Route::get('/tentang', [Transaction::class, 'index']);
Route::get('/sewa', [Transaction::class, 'sewa']);
Route::get('/riwayat_sewa', [Transaction::class, 'riwayat_sewa']);
