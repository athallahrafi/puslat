<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transaction extends Controller
{
    //
    function sewa(){
        $data = ['title'=>'sewa'];
        return view('form_sewa',$data);
    }
    function riwayat_sewa(){
        $data = ['title'=>'riwayat sewa'];
        return view('riwayat_sewa',$data);
    }
}
