<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('fakultas', function (Blueprint $table) {
            $table->unsignedBigInteger('dosen_id')->after('name')->nullable();
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::table('fakultas', function (Blueprint $table) {
            $table->dropForeign(['dosen_id']);
            $table->dropColumn('dosen_id');
        });
    }
};
