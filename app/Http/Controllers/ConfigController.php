<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    // Exibe o formulário para editar configurações
    public function edit()
    {
        $config = Config::first(); // Pega a configuração atual, se existir
        return view('config.edit', compact('config'));
    }

    // Atualiza as configurações
    public function update(Request $request)
    {
        $request->validate([
            'numero_jogadores' => 'required|integer|min:1',
        ]);

        // Pega ou cria a configuração
        $config = Config::first() ?? new Config();

        $config->numero_jogadores = $request->input('numero_jogadores');
        $config->save();

        return redirect()->route('config.edit')->with('status', 'Configuração atualizada com sucesso!');
    }
}
