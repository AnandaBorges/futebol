<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    use HasFactory;

    protected $fillable = ['jogador_id', 'data_evento', 'presente'];

    public function jogador()
    {
        return $this->belongsTo(Jogador::class);
    }
}
