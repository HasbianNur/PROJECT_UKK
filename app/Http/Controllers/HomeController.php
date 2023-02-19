<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Barang;
use App\Models\History_Lelang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home',[
            'title' => 'Ternak Lelang',
            'data' => Barang::orderBy('created_at', 'desc')->get(),
            'kategori' => Kategori::all(),
            'css' => '-'
        ]);
    }

    public function detailBarang($id){
        try{
            $getBarang = Barang::where('id_barang', $id)->first();
            $getHistory = History_Lelang::where('id_barang', $id)->latest()->first();
            if(!isset($getBarang->id_barang)){
                return abort(404);
            }
        }catch(Exception $e){
            abort(404);
        }
        return view('detailbarang', [
            'title' => $getBarang->name,
            'data' => $getBarang,
            'kategori' => Kategori::all(),
            'tawaran' => $getHistory,
            'css' => 'detail'
        ]);
    }

}
