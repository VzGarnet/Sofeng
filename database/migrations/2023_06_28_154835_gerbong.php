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
        Schema::create('gerbong', function (Blueprint $table) {
            $table->char('argoID', 5);
            $table->char('gerbongID', 1);
            $table->integer('kursiNo');

            $table->primary(['argoID', 'gerbongID', 'kursiNo']);

            $table->integer('occupied')->nullable();

            $table->foreign('argoID')
                ->references('argoID')
                ->on('argo')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerbong');
    }
};
