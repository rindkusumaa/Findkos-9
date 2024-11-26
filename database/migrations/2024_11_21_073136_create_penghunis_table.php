<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghuniTable extends Migration
{
    public function up()
    {
        Schema::create('penghunis', function (Blueprint $table) {
            $table->increments('id_penghuni');
            $table->string('nama', 45);
            $table->string('nik', 16);
            $table->string('email', 45);
            $table->string('no_telp', 13);
            $table->string('pekerjaan', 45);
            $table->date('tgl_lahir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penghunis');
    }
}
