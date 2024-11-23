<x-app-layout>

    <h5>Excluir Veículo</h5>

    <form action="/veiculo/" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" class="form-control" value="{{ $veiculo->marca }}" disabled/>
                <label for="placa" class="form-label">Placa:</label>
                <input type="text" name="placa" class="form-control" value="{{ $veiculo->placa }}" disabled/>
                <label for="ano" class="form-label">Ano:</label>
                <input type="text" name="ano" class="form-control" value="{{ $veiculo->ano }}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>