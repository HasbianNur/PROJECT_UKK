<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
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
            'data' => Barang::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function storeBarangLelang(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|string',
            'kategori_id' => 'required|numeric'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $request->file('image')->storeAs('public/Image', $filename);


            $finaldata = [
                'user_id' => auth()->user()->id,
                // 'kategori_id' => auth()->()->id,
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

    public function editBarangLelang(Request $request, $id){
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required|string'
        ]);

        $finaldata = [
            'nama_barang' => $request->nama,
            'harga_awal' => $request->harga,
            'tgl' => $request->tanggal,
            'deskripsi_barang' => $request->deskripsi,
        ];
        $getBarang = Barang::where('id_barang', $id)->first();
        if($request->file('image') != null){
            Storage::delete('/public/Image/'.$getBarang->image);
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $request->file('image')->storeAs('public/Image', $filename);
            $finaldata['image'] = $filename;
        }

        Barang::where('id_barang', $id)->update($finaldata);

        return back()->with('success', 'Edit Data Success!');
    }

    public function deleteBarangLelang(Request $request){
        if($request->id == null){
            return back()->with('fail', 'Terjadi Kesalahan Input');
        }
        $getBarang = Barang::where([
            'id_barang' => $request->id,
            'user_id' => auth()->user()->id
        ])->first();
        if($getBarang->id_barang == null){
            return back()->with('fail', 'Barang tidak ditemukan');
        }

        Barang::where('id_barang', $request->id)->delete();
        return back()->with('success', 'Barang dihapus!');
    }
}
