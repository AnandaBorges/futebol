@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Configurações</h2>
    <form method="POST" action="{{ route('configuracoes.update') }}">
        @csrf
        <!-- Adicione campos conforme necessário -->
        <div class="form-group">
            <label for="exampleSetting">Exemplo de Configuração:</label>
            <input type="text" class="form-control" id="exampleSetting" name="example_setting" value="{{ old('example_setting', $configuracao->example_setting) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Configurações</button>
    </form>
</div>
@endsection
