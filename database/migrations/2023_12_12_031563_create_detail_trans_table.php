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
        Schema::create('detail_trans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_item')->unsigned()->on('souvernis')->onDelete('cascade');
            $table->bigInteger('id_transaksi')->unsigned()->on('transaksis')->onDelete('cascade');
            $table->integer('jumlah');
            $table->double('subtotal');

            $table->foreign('id_item')->references('id')->on('souvenirs')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_trans');
    }
};
