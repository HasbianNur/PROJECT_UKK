<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home',[
            'data' => Barang::all()
        ]);
    }
}
