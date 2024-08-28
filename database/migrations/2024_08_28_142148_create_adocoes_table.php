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
        Schema::create('adocoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->constrained('animais')->onDelete('cascade');
            $table->foreignId('adotante_id')->constrained('adotantes')->onDelete('cascade');
            $table->date('data_adocao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocoes');
    }
};
