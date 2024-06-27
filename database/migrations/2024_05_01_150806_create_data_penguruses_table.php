<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_penguruses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->integer('id_bidang');
            $table->string('email')->unique();
            $table->integer('username');
            $table->string('password');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     *  
     */
    public function down()
    {
        Schema::dropIfExists('data_penguruses');
    }
};
