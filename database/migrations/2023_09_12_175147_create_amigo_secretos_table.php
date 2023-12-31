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
        Schema::create('amigo_secretos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('participante_id');
            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->unsignedBigInteger('participanteSorteado_id');
            $table->unsignedBigInteger('grupoSorteio_id');
            $table->foreign('grupoSorteio_id')->references('id')->on('grupo_sorteios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amigo_secretos');
    }
};