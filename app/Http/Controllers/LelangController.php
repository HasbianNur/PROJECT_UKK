<?php

namespace App\Http\Controllers;

use App\Models\History_Lelang;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    public function buatPenawaranLelang(Request $request){
        $getHistory = History_Lelang::where('id_barang', $request->barang)->latest()->first();
        $penawaran = !isset($getHistory->id_history) ? 0 : $getHistory->penawaran_harga;
        $data = $request->validate([
            'barang' => 'required|numeric',
            'bid' => 'required|numeric|min:'.$penawaran
        ]);
        $insertData = [
            'id_user' => auth()->user()->id,
            'id_barang' => $data['barang'],
            'penawaran_harga' => $data['bid']
        ];

        History_Lelang::create($insertData);

        $tawaran = number_format($data['bid'], 0, ',', '.');
        return back()->with('success', 'Anda telah menawar barang ini sebesar Rp. '.$tawaran);

    }
}
