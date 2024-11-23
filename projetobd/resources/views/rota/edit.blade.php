<x-app-layout>

    <h5>Alterar Rota</h5>

    <form action="/rota/{{ $rota->id }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="estado_inicio" class="form-label">Informe o estado de inicio:</label>
                <input type="text" name="estado_inicio" class="form-control" value="{{ $rota-> estado_inicio }}" required/>
                <label for="cidade_inicio" class="form-label">Informe a cidade de inicio:</label>
                <input type="text" name="cidade_inicio" class="form-control" value="{{ $rota-> cidade_inicio }}" required/>
                <label for="estado_final" class="form-label">Informe o estado final:</label>
                <input type="text" name="estado_final" class="form-control" value="{{ $rota-> estado_final }}" required/>
                <label for="cidade_final" class="form-label">Informe o cidade final:</label>
                <input type="text" name="cidade_final" class="form-control" value="{{ $rota-> cidade_final }}" required/>
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