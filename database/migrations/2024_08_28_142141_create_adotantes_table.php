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
        Schema::create('adotantes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('telefone');
            $table->date('data_nascimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adotantes');
    }
};
