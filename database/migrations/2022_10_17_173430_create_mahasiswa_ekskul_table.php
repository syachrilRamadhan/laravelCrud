<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa_ekskul', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas')->onDelete('restrict');
            $table->unsignedBigInteger('ekskul_id');
            $table->foreign('ekskul_id')->references('id')->on('ekskuls')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa_ekskul');
    }
};
