<x-app-layout>

    <h5>Novo Veículo</h5>

    <form action="/veiculo" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="marca" class="form-label">Informe o Marca:</label>
                <input type="text" name="marca" class="form-control"/>
                <label for="placa" class="form-label">Informe a placa:</label>
                <input type="text" name="placa" class="form-control"/>
                <label for="ano" class="form-label">Informe o ano:</label>
                <input type="text" name="ano" class="form-control"/>
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