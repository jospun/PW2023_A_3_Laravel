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
        Schema::create('souvenirs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_acara')->unsigned()->on('acaras')->onDelete('cascade');
            $table->string('nama');
            $table->double('harga');
            $table->string('deskripsi');
            $table->string('jenis');
            $table->string('gambar');
            $table->integer('stok');
            $table->timestamps();

            $table->foreign('id_acara')->references('id')->on('acaras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souvenirs');
    }
};
