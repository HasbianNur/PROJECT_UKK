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
        Schema::create('lelang', function (Blueprint $table) {
            $table->id('id_lelang');
            $table->foreignId('id_barang');
            $table->date('tgl_lelang');
            $table->foreignId('harga_akhir');
            $table->foreignId('id_user');
            $table->foreignId('id_petugas');
            $table->enum('status', ['dibuka, ditutup']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelang');
    }
};