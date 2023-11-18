<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    function index(){
        $data = ['title'=>'kategori'];
        return view('login',$data);
    }
    function daftar(){
        $data = ['title'=>'daftar'];
        return view('daftar',$data);
    }
    function logout(){
        session_destroy();
    }
}
