<x-app-layout>

    <h5>Alterar Veículo</h5>

    <form action="/veiculo/{{ $veiculo->id }}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
            <label for="veiculo_id" class="form-label">Informe a Marca:</label>
                <select type="text" name="veiculo_id" id="veiculo_id" class="form-control">
                    @foreach ($veiculo as $veiculo)
                        <option value="{{ $veiculo->id }}" {{ $viagem->veiculo_id == $veiculo_id->id ? 'selected' : ''}}>{{ $veiculo->marca }}</option>
                    @endforeach
                </select>
                <label for="motorista_id" class="form-label">Informe o motorista:</label>
                <select type="text" name="motorista_id" id="motorista_id" class="form-control">
                <select type="text" name="motorista_id" id="motorista_id" class="form-control">
                    @foreach ($motorista as $motorista)
                        <option value="{{ $motorista->id }}" {{ $viagem->motorista_id == $motorista_id->id ? 'selected' : ''}}>{{ $motorista->nome }}</option>
                    @endforeach
                </select> 
                <label for="rota_id" class="form-label">Informe a cidade inicial:</label>
                <select type="text" name="rota_id" id="rota_id" class="form-control">
                <select type="text" name="rota_id" id="rota_id" class="form-control">
                    @foreach ($rota as $rota)
                        <option value="{{ $rota->id }}" {{ $viagem->rota_id == $rota_id->id ? 'selected' : ''}}>{{ $rota->cidade_inicio }}</option>
                    @endforeach
                </select>
                <label for="rota_id" class="form-label">Informe a cidade final:</label>
                <select type="text" name="rota_id" id="rota_id" class="form-control">
                <select type="text" name="rota_id" id="rota_id" class="form-control">
                    @foreach ($rota as $rota)
                        <option value="{{ $rota->id }}" {{ $viagem->rota_id == $rota_id->id ? 'selected' : ''}}>{{ $rota->cidade_final }}</option>
                    @endforeach
                </select>
                <label for="data_viagem" class="form-label">Data da Viagem:</label>
                <input type="date" name="data_viagem" id="data_viagem" class="form-control" value="{{ $viagem->data_viagem }}"/>
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