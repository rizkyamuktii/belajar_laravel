<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    //GET
    // select * from pesertas
    public function index()
    {
        $pesertas = Peserta::get();
        $title = "Data Peserta";
        return view ('peserta.index', compact('pesertas', 'title'));
        
    }
    public function create()
    {
        $title = "Tambah Peserta Baru";
        return view ('peserta.create', compact('title'));
    }
    //post
    public function store(Request $request)
    {

        Peserta::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'age'=> $request->umur,
            'address'=> $request->address
        ]);

        return redirect()-> to('peserta');
    }
}
