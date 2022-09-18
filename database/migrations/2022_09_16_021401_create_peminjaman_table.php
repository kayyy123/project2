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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->foreignId('kode_barang')->unique();
            $table->string('divisi');
            $table->enum('select',['laptop','mouse','keyboard','infocus','printer']);
            $table->string('quantity');
            $table->string('harga');
            $table->date('waktu_peminjaman');
            $table->date('estimasi');
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
        Schema::dropIfExists('peminjaman');
    }
};
