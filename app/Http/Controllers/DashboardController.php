<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'title' => 'Beranda | Dashboard'
        ]);
    }
    
    public function viewBarangLelang(){
        return view('dashboard.barang_lelang',[
            'title' => 'Barang Lelang | Dashboard'
        ]);
    }
}
