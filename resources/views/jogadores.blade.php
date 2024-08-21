<!-- resources/views/jogadores.blade.php -->

<form action="{{ route('jogadores.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="habilidade">Habilidade (1 a 5):</label>
        <input type="number" id="habilidade" name="habilidade" min="1" max="5" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="goleiro">É goleiro?</label>
        <select id="goleiro" name="goleiro" class="form-control" required>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
