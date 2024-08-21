@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sorteio de Equipes</h2>
    <form method="POST" action="{{ route('teams.sort') }}">
        @csrf
        <div class="form-group">
            <label for="number_of_teams">Número de Equipes:</label>
            <input type="number" class="form-control" id="number_of_teams" name="number_of_teams" value="{{ old('number_of_teams') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Sortear</button>
    </form>
</div>
@endsection
