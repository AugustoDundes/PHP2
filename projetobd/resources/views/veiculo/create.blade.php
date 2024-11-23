<x-app-layout>

    <h5>Novo Veículo</h5>

    <form action="/veiculo" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="marca" class="form-label">Informe a Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control"/>
                <label for="placa" class="form-label">Informe a placa:</label>
                <input type="text" name="placa" id="placa" class="form-control"/>
                <label for="ano" class="form-label">Informe o ano:</label>
                <input type="text" name="ano" id="ano" class="form-control"/>
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