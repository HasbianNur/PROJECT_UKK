<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::insert([
            [
                'nama' => 'Elektronik'
            ],
            [
                'nama' => 'Game'
            ],
            [
                'nama' => 'Seni'
            ],
            [
                'nama' => 'Barang Antik'
            ],
            [
                'nama' => 'Logam Mulia'
            ],
            [
                'nama' => 'Motor'
            ],
            [
                'nama' => 'Mobil'
            ],
            [
                'nama' => 'Kapal'
            ],
            [
                'nama' => 'Rumah'
            ],
            [
                'nama' => 'Tanah'
            ],
        ]);
    }
}
