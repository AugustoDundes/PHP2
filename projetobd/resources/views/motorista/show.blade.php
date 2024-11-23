<x-app-layout>

    <h5>Excluir Veículo</h5>

    <form action="/veiculo/" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
            <label for="nome" class="form-label">Informe o nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $motorista->nome }}" disabled/>
                <label for="habilitacao" class="form-label">Informe a habilitacao:</label>
                <input type="text" name="habilitacao" class="form-control" value="{{ $motorista->habilitacao }}" disabled/>
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $motorista->telefone }}" disabled/>
                <label for="idade" class="form-label">Informe o idade:</label>
                <input type="text" name="idade" class="form-control" value="{{ $motorista->idade }}" disabled/>
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