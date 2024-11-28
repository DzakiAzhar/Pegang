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
        Schema::create('pemagang', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('instansi');
            $table->string('email');
            $table->string('lama_magang');
            $table->string('proposal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemagang');
    }
};
