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
        Schema::create('gueststars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_acara')->unsigned()->on('acaras')->onDelete('cascade');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('id_acara')->references('id')->on('acaras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gueststars');
    }
};
