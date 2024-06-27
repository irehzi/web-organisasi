<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prokers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proker');
            $table->date('tanggal');
            $table->string('tempat');
            $table->string('email');
            $table->string('penyelenggara');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prokers');
    }
};
