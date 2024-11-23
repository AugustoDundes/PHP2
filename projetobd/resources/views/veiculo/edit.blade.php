<x-app-layout>

    <h5>Alterar Veículo</h5>

    <form action="/veiculo/{{ $veiculo->id }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="marca" class="form-label">Informe a Marca:</label>
                <input type="text" name="marca" class="form-control" value="{{ $veiculo->marca }}" required/>
                <label for="placa" class="form-label">Informe a placa:</label>
                <input type="text" name="placa" class="form-control" value="{{ $veiculo->placa }}" required/>
                <label for="ano" class="form-label">Informe o ano:</label>
                <input type="text" name="ano" class="form-control" value="{{ $veiculo->ano }}" required/>
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