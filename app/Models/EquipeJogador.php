<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipeJogador extends Model
{
    use HasFactory;

    // Defina a tabela associada se o nome da tabela não seguir a convenção padrão
    protected $table = 'equipe_jogador';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = ['equipe_id', 'jogador_id'];
}
