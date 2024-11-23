<x-app-layout>

    <h5>Alterar Rota</h5>

    <form action="/rota/{{ $rota->$id }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="estado-inicio" class="form-label">Informe o estado de inicio:</label>
                <input type="text" name="estado-inicio" class="form-control" value="{{ $rota-> estado-inicio }}" required/>
                <label for="cidade-inicio" class="form-label">Informe a cidade de inicio:</label>
                <input type="text" name="cidade-inicio" class="form-control" value="{{ $rota-> cidade-inicio }}" required/>
                <label for="estado-final" class="form-label">Informe o estado final:</label>
                <input type="text" name="estado-final" class="form-control" value="{{ $rota-> estado-final }}" required/>
                <label for="cidade-final" class="form-label">Informe o cidade final:</label>
                <input type="text" name="cidade-final" class="form-control" value="{{ $rota-> cidade-final }}" required/>
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