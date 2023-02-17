<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home',[
            'title' => 'Ternak Lelang',
            'data' => Barang::orderBy('created_at', 'desc')->get(),
            'kategori' => Kategori::all()
        ]);
    }
}
