<x-app-layout>

    <h5 class="mt-3">Gerenciar Viagem</h5>

    <a class="btn btn-success" href="/viagem/create">
        Inserir nova Viagem
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Veículo</th>
                <th>Motorista</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Data da viagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viagem as $v)
            <tr>
                <td>{{ $v->veiculo->marca }}</td>
                <td>{{ $v->motorista->nome }}</td>
                <td>{{ $v->rota->cidade_inicio }}</td>
                <td>{{ $v->rota->cidade_final }}</td>
                <td>{{ \Carbon\Carbon::parse($v->data_viagem)->format('d/m/y') }}</td>
                <td>
                    <a href="/viagem/{{ $v->id }}/edit" class="btn btn-warning">Alterar</a>
                    <form action="/viagem/{{ $v->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>