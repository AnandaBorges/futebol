@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Definir Equipes</h2>
    <form method="POST" action="{{ route('teams.setup') }}">
        @csrf
        <div class="form-group">
            <label for="players_per_team">Número de Jogadores por Equipe:</label>
            <input type="number" class="form-control" id="players_per_team" name="players_per_team" value="{{ old('players_per_team') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Definir</button>
    </form>
</div>
@endsection
