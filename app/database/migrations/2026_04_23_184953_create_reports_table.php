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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->integer('year');
            $table->integer('month');

            $table->integer('castracao_interna')->nullable();
            $table->integer('castracao_externa')->nullable();
            $table->integer('atendimento_interno')->nullable();
            $table->integer('atendimento_externo')->nullable();
            $table->integer('obitos')->nullable();
            $table->integer('eutanasias')->nullable();
            $table->integer('solicitacoes_samuvet')->nullable();
            $table->integer('doacoes')->nullable();
            $table->integer('solturas')->nullable();
            $table->integer('resgatados')->nullable();
            $table->integer('abrigados')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
