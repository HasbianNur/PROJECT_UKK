<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->date('tgl');
            $table->foreignId('harga_awal');
            $table->string('deskripsi_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.=
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};