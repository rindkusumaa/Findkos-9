<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) { 
            $table->increments('id_pembayaran'); 
            $table->integer('id_penghuni')->unsigned(); 
            $table->integer('id_kamar')->unsigned(); 
            $table->integer('id_user')->unsigned(); 
            $table->integer('tahun'); 
            $table->tinyInteger('bulan'); 
            $table->dateTime('tanggal_bayar'); 
            $table->integer('jumlah'); 
            $table->timestamps(); 

            $table->foreign('id_penghuni')->references('id_penghuni')->on('penghuni'); 
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar'); 
            $table->foreign('id_user')->references('id_user')->on('users'); });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
