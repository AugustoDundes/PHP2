<x-app-layout>

    <h5>Novo rota</h5>

    <form action="/rota" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="estado-inicio" class="form-label">Informe o estado de inicio:</label>
                <input type="text" name="estado-inicio" id="estado-inicio" class="form-control"/>
                <label for="cidade-inicio" class="form-label">Informe a cidade de inicio:</label>
                <input type="text" name="cidade-inicio" id="cidade-inicio" class="form-control"/>
                <label for="estado-final" class="form-label">Informe o estado final:</label>
                <input type="text" name="estado-final" id="estado-final" class="form-control"/>
                <label for="cidade-final" class="form-label">Informe o cidade final:</label>
                <input type="text" name="cidade-final" id="cidade-final" class="form-control"/>
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