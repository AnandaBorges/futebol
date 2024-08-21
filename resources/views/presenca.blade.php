@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Marcação de Presença</h2>
    <form method="POST" action="{{ route('presence.update') }}">
        @csrf
        @foreach($players as $player)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="player_{{ $player->id }}" name="players[]" value="{{ $player->id }}" {{ $player->presence ? 'checked' : '' }}>
                <label class="form-check-label" for="player_{{ $player->id }}">
                    {{ $player->name }}
                </label>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Salvar Presença</button>
    </form>
</div>
@endsection
