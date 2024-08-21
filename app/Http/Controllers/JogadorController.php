<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'habilidade' => 'required|integer|min:1|max:5',
            'goleiro' => 'required|boolean',
        ]);

        Jogador::create([
            'nome' => $request->input('nome'),
            'habilidade' => $request->input('habilidade'),
            'goleiro' => $request->input('goleiro') == '1', // Converte o valor para booleano
        ]);

        return redirect()->route('jogadores.index')->with('status', 'Jogador adicionado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'habilidade' => 'required|integer|min:1|max:5',
            'goleiro' => 'required|boolean',
        ]);

        $jogador = Jogador::findOrFail($id);
        $jogador->update([
            'nome' => $request->input('nome'),
            'habilidade' => $request->input('habilidade'),
            'goleiro' => $request->input('goleiro') == '1', // Converte o valor para booleano
        ]);

        return redirect()->route('jogadores.index')->with('status', 'Jogador atualizado com sucesso!');
    }

    // Método para listar jogadores, caso ainda não tenha implementado
    public function index()
    {
        $jogadores = Jogador::all();
        return view('jogadores.index', compact('jogadores'));
    }

    // Método para exibir o formulário de edição
    public function edit($id)
    {
        $jogador = Jogador::findOrFail($id);
        return view('jogadores.edit', compact('jogador'));
    }

    // Método para mostrar um jogador específico (opcional)
    public function show($id)
    {
        $jogador = Jogador::findOrFail($id);
        return view('jogadores.show', compact('jogador'));
    }
}
