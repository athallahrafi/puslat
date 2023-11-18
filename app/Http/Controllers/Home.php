<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    function index(){
        $data = [
            'title' => 'Home'
        ];
        return view('home',$data);
    }
    function about(){
        $data = [
            'title' => 'Tentang'
        ];
        return view('about',$data);
    }
}
