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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned()->on('users')->onDelete('cascade');
            $table->bigInteger('id_acara')->unsigned()->on('acaras')->onDelete('cascade');
            $table->string('status');
            $table->datetime('tanggal_bayar');

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_acara')->references('id')->on('acaras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
