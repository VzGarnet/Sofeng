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
        Schema::create('argo', function (Blueprint $table) {
            $table->id('trainID');
            $table->string('argoName', length: 255)->nullable();
            $table->string('kelasArgo', length: 255)->nullable();
            $table->string('tujuanAwal', length: 255)->nullable();
            $table->string('stasiunAwal', length: 255)->nullable();
            $table->string('tujuanAkhir', length: 255)->nullable();
            $table->string('stasiunAkhir', length: 255)->nullable();
            $table->integer('harga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('argo');
    }
};
