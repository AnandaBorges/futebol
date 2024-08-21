<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'habilidade', 'goleiro'];

    // Adicione quaisquer relacionamentos se necessário
}
