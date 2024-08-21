@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultado do Sorteio</h2>
    @foreach($teams as $team)
        <h3>Equipe {{ $loop->iteration }}</h3>
        <ul class="list-group">
            @foreach($team as $player)
                <li class="list-group-item">{{ $player->name }} - Nível: {{ $player->skill_level }} - Goleiro: {{ $player->is_goalie ? 'Sim' : 'Não' }}</li>
            @endforeach
        </ul>
    @endforeach
</div>
@endsection
