<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuanganTable extends Migration
{
    public function up()
    {
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_atlet');
            $table->decimal('jumlah', 8, 2);
            $table->enum('status_pembayaran', ['lunas', 'belum']);
            $table->foreign('id_atlet')->references('id')->on('athletes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keuangan');
    }
}