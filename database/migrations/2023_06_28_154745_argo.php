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
            $table->char('argoID', 5)->primary();
            $table->string('namaArgo', 25);
            $table->string('kelasArgo', 25);
            $table->string('stBrgkt', 25);
            $table->string('stBID', 25);
            $table->string('stTiba', 25);
            $table->string('stTID', 25);
            $table->date('tanggal');
            $table->integer('pob');
            $table->integer('harga');
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
