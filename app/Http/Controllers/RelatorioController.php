<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;
use App\Models\Equipe;

class RelatorioController extends Controller
{
    // Exibe o relatório das equipes
    public function equipes()
    {
        // Aqui você deve obter os dados das equipes do seu banco de dados.
        // Este exemplo assume que você tem um relacionamento entre Equipe e Jogador.
        $equipes = Equipe::with('jogadores')->get();

        return view('relatorios.equipes', compact('equipes'));
    }

    // Exibe o relatório dos jogadores
    public function jogadores()
    {
        // Obtém todos os jogadores, podendo incluir filtros ou ordenações conforme necessário
        $jogadores = Jogador::all();

        return view('relatorios.jogadores', compact('jogadores'));
    }
}
