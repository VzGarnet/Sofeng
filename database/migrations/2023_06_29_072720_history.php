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
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userID');
            $table->char('argoID', 5)->nullable();
            $table->char('gerbongID', 1)->nullable();
            $table->integer('kursiNo')->nullable();

            $table->string('titel', 255)->nullable();
            $table->string('namalengkap', 255)->nullable();
            $table->string('telepon', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('NIK', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
