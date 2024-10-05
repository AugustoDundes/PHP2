<x-app-layout>

    <h5 class="mt-3">Gerenciar Veículo</h5>

    <a class="btn btn-success" href="/veiculo/create">
        Inserir nova Veículo
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>marca</th>
                <th>Placa</th>
                <th>Ano</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculo as $c)
            <tr>
                <td>{{ $c->marca }}</td>
                <td>{{ $c->placa }}</td>
                <td>{{ $c->ano }}</td>
                <td>
                    <a href="/veiculo/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/veiculo/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>