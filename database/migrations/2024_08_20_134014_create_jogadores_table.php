<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jogadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('habilidade');
            $table->boolean('goleiro');
            $table->timestamps();
        });

        // Adiciona a restrição de CHECK usando SQL bruto
        DB::statement('ALTER TABLE jogadores ADD CONSTRAINT check_habilidade CHECK (habilidade BETWEEN 1 AND 5)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogadores');
    }
};
