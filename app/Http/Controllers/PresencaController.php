<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class PresencaController extends Controller
{
    // Exibe a lista de jogadores e o formulário de presença
    public function index()
    {
        $jogadores = Jogador::all();
        return view('presenca.index', compact('jogadores'));
    }

    // Marca presença para os jogadores selecionados
    public function store(Request $request)
    {
        $request->validate([
            'jogadores_ids' => 'required|array',
            'jogadores_ids.*' => 'exists:jogadores,id',
        ]);

        // Marca presença para os jogadores selecionados
        Jogador::whereIn('id', $request->input('jogadores_ids'))->update(['presenca' => true]);

        return redirect()->route('presenca.index')->with('status', 'Presença marcada com sucesso!');
    }
}
