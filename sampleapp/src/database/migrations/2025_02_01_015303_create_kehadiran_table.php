<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiranTable extends Migration
{
    public function up()
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atlet');
            $table->unsignedBigInteger('id_pelatihan');
            $table->boolean('status');  // Kehadiran: hadir atau tidak
            $table->foreign('id_atlet')->references('id')->on('athletes');
            $table->foreign('id_pelatihan')->references('id')->on('pelatihan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kehadiran');
    }
}
