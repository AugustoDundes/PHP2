<x-app-layout>

    <h5>Novo rota</h5>

    <form action="/rota" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="estado_inicio" class="form-label">Informe o estado de inicio:</label>
                <input type="text" name="estado_inicio" id="estado_inicio" class="form-control"/>
                <label for="cidade_inicio" class="form-label">Informe a cidade de inicio:</label>
                <input type="text" name="cidade_inicio" id="cidade_inicio" class="form-control"/>
                <label for="estado_final" class="form-label">Informe o estado final:</label>
                <input type="text" name="estado_final" id="estado_final" class="form-control"/>
                <label for="cidade_final" class="form-label">Informe o cidade final:</label>
                <input type="text" name="cidade_final" id="cidade_final" class="form-control"/>
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