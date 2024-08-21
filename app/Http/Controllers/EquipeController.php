<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class EquipeController extends Controller
{
    // Exibe o formulário para definir o número de jogadores por equipe
    public function create()
    {
        return view('equipes.create');
    }

    // Realiza o sorteio dos jogadores e cria as equipes
    public function store(Request $request)
    {
        $request->validate([
            'numero_jogadores' => 'required|integer|min:1',
        ]);

        $numero_jogadores = $request->input('numero_jogadores');
        $jogadoresPresenca = Jogador::where('presenca', true)->get();

        if ($jogadoresPresenca->count() < 2 * $numero_jogadores) {
            return redirect()->back()->with('error', 'Número insuficiente de jogadores para formar as equipes.');
        }

        $goleiros = $jogadoresPresenca->where('goleiro', true);
        $outrosJogadores = $jogadoresPresenca->where('goleiro', false);

        if ($goleiros->count() > 0) {
            $equipes = $this->sortearEquipes($outrosJogadores, $numero_jogadores, $goleiros);
        } else {
            $equipes = $this->sortearEquipes($jogadoresPresenca, $numero_jogadores);
        }

        return view('equipes.resultado', compact('equipes'))->with('status', 'Equipes sorteadas com sucesso!');
    }

    // Método auxiliar para sortear jogadores entre equipes
    private function sortearEquipes($jogadores, $numero_jogadores, $goleiros = null)
    {
        $jogadores = $jogadores->shuffle(); // Embaralha os jogadores para o sorteio
        $numero_equipes = ceil($jogadores->count() / $numero_jogadores); // Calcula o número de equipes necessário

        // Inicializa as equipes vazias
        $equipes = array_fill(0, $numero_equipes, collect());

        // Distribui os goleiros nas equipes, se houver
        if ($goleiros && $goleiros->count() > 0) {
            foreach ($goleiros as $index => $goleiro) {
                $equipeIndex = $index % $numero_equipes;
                $equipes[$equipeIndex]->push($goleiro);
            }
        }

        // Divide os outros jogadores entre as equipes
        foreach ($jogadores as $index => $jogador) {
            $equipeIndex = $index % $numero_equipes;
            $equipes[$equipeIndex]->push($jogador);
        }

        return $equipes;
    }
}
