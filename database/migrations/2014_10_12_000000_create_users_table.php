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
        Schema::create('users', function (Blueprint $table) 
        { $table->increments('id_user'); 
            $table->string('nama_user', 45); 
            $table->string('email', 45); 
            $table->string('password', 32); 
            $table->enum('role', ['role1', 'role2']); // Sesuaikan peran 
            $table->enum('status', ['status1', 'status2']); // Sesuaikan status 
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
