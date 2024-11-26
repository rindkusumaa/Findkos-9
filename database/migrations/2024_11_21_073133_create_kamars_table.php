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
        Schema::create('kamars', function (Blueprint $table) { 
            $table->increments('id_kamar'); 
            $table->tinyInteger('no_kamar'); 
            $table->integer('harga1'); 
            $table->integer('harga2'); 
            $table->enum('status', ['status1', 'status2']); // Sesuaikan status 
            $table->string('gambar', 45); 
            $table->timestamps(); });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
