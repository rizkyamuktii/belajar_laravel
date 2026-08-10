<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;            

class BelajarController extends Controller
{
    public function index () {
        return view("counting");
    }
    public function greeting ()
    {
        return "Selamat datang di Kelas Laravel";
    }

    public function tambah()
    {
        $nilai1 = 5;
        $nilai2 = 7;
        $hasil = $nilai1 + $nilai2;
        
        return "Hasil dari penjumlahan $nilai1 + $nilai2 = $hasil";
    }
}
