<x-app-layout>

    <h5>Nova Rota</h5>

    <form action="/rota" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome:</label>
                <input type="text" name="nome" id="nome" class="form-control"/>
                <label for="habilitacao" class="form-label">Informe a habilitacao:</label>
                <input type="text" name="habilitacao" id="habilitacao" class="form-control"/>
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control"/>
                <label for="idade" class="form-label">Informe o idade:</label>
                <input type="text" name="idade" id="idade" class="form-control"/>
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