<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\History_Lelang;

class LelangController extends Controller
{
    public function buatPenawaranLelang(Request $request){
        $getHistory = History_Lelang::where('id_barang', $request->barang)->latest()->first();
        $getBarang = Barang::where('id_barang', $request->barang)->first();
        $penawaran = !isset($getHistory->id_history) ? $getBarang->harga_awal + 1 : $getHistory->penawaran_harga + 1;
        $data = $request->validate([
            'barang' => 'required|numeric',
            'bid' => 'required|numeric|min:'.$penawaran
        ]);
        if(isset($getBarang->id_barang)){
            if($getBarang->user_id == auth()->user()->id){
                return back()->with('message', 'Anda tidak bisa menawar barang anda sendiri!');
            }
        }
        if(strtotime('+1 day', strtotime($getBarang->created_at)) < strtotime(date('Y-m-d H:i:s'))){
            return abort(404);
        }
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
