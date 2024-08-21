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
        Schema::create('equipe_jogador', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' auto-incrementável
            $table->foreignId('equipe_id')->constrained()->onDelete('cascade'); // Cria a coluna 'equipe_id' como chave estrangeira
            $table->foreignId('jogador_id')->constrained()->onDelete('cascade'); // Cria a coluna 'jogador_id' como chave estrangeira
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipe_jogador'); // Remove a tabela 'equipe_jogador'
    }
};
