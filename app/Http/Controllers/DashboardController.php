<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
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
            'data' => Barang::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function storeBarangLelang(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|string'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $request->file('image')->storeAs('public/Image', $filename);


            $finaldata = [
                'user_id' => auth()->user()->id,
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
}
