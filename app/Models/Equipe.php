<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function jogadores()
    {
        return $this->belongsToMany(Jogador::class, 'equipe_jogador');
    }
}
