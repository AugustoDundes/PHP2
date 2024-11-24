<x-app-layout>

    <h5>Novaa Viagem</h5>

    <form action="/viagem" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="veiculo_id" class="form-label">Informe o Carro:</label>
                <select type="text" name="veiculo_id" id="veiculo_id" class="form-control">
                <option value="" disabled selected>Selecione um veículo</option>
                    @foreach ($veiculo as $veiculo)
                        <option value="{{ $veiculo->id }}">{{ $veiculo->marca }} - {{ $veiculo->placa }}</option>
                    @endforeach
                </select>
                <label for="motorista_id" class="form-label">Informe o motorista:</label>
                <select type="text" name="motorista_id" id="motorista_id" class="form-control">
                <option value="" disabled selected>Selecione um motorista</option>
                    @foreach ($motorista as $motorista)
                        <option value="{{ $motorista->id }}">{{ $motorista->nome }}, {{ $motorista->idade }} anos</option>
                    @endforeach
                </select> 
                <label for="rota_id" class="form-label">Informe a rota:</label>
                <select type="text" name="rota_id" id="rota_id" class="form-control">
                <option value="" disabled selected>Selecione uma rota</option>
                    @foreach ($rota as $rota)
                        <option value="{{ $rota->id }}">{{ $rota->estado_inicio }} - {{ $rota->cidade_inicio }} -> {{ $rota->estado_final }} - {{ $rota->cidade_final }}</option>
                    @endforeach
                </select>
                <label for="data_viagem" class="form-label">Data da Viagem:</label>
                <input type="date" name="data_viagem" id="data_viagem" class="form-control"/>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar Viagem
                </button>
            </div>
        </div>
    </form>

</x-app-layout>