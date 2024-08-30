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
        Schema::create('acompanhamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adocao_id')->constrained('adocoes')->onDelete('cascade');
            $table->date('data_visita');
            $table->text('avaliacao_saude')->nullable();
            $table->text('observacoes')->nullable();
            $table->string('avaliacao_relacionamento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acompanhamentos');
    }
};
