<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Beranda | Dashboard'
        ]);
    }

    public function viewBarangLelang()
    {
        return view('dashboard.barang_lelang', [
            'title' => 'Barang Lelang | Dashboard',
            'data' => Barang::where('user_id', auth()->user()->id)->get(),
            'kategori' => Kategori::all()
        ]);
    }

    public function storeBarangLelang(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|string',
            'kategori' => 'required|numeric'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $request->file('image')->storeAs('public/Image', $filename);


            $finaldata = [
                'user_id' => auth()->user()->id,
                'kategori_id' => $request->kategori,
                'nama_barang' => $request->nama,
                'harga_awal' => $request->harga,
                'tgl' => $request->tanggal,
                'deskripsi_barang' => $request->deskripsi,
                'image' => $filename
            ];
            Barang::create($finaldata);
            return back()->with('message', 'Berhasil menambahkan barang lelang');
        } else {
            return back()->with('error_image', 'Gambar tidak boleh Kosong');
        }
    }

    public function editBarangLelang(Barang $barang, Request $request){
        $this->authorize('update', $barang);
        $data = $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|string',
            'kategori' => 'required|numeric'
        ]);

        $finaldata = [
            'nama_barang' => $request->nama,
            'tgl' => $request->tanggal,
            'deskripsi_barang' => $request->deskripsi,
            'kategori_id' => $request->kategori
        ];
        $getBarang = Barang::where([
            'id_barang' => $barang->id_barang,
            'user_id' => auth()->user()->id
        ])->first();

        if(!isset($getBarang->id_barang)){
            return back()->with('fail', 'Gagal Mengedit Barang!');
        }
        if($request->file('image') != null){
            Storage::delete('/public/Image/'.$getBarang->image);
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $request->file('image')->storeAs('public/Image', $filename);
            $finaldata['image'] = $filename;
        }

        Barang::where('id_barang', $barang->id_barang)->update($finaldata);

        return back()->with('success', 'Edit Data Success!');
    }

    public function deleteBarangLelang(Barang $barang,Request $request){
        if($request->id == null){
            return back()->with('fail', 'Terjadi Kesalahan Input');
        }
        $getBarang = Barang::where([
            'id_barang' => $request->id,
            'user_id' => auth()->user()->id
            ])->first();

        $this->authorize('delete', $getBarang);
        
        if(!isset($getBarang->id_barang)){
            return back()->with('fail', 'Barang tidak ditemukan');
        }
        Barang::where('id_barang', $request->id)->delete();
        return back()->with('success', 'Barang dihapus!');
    }
}
