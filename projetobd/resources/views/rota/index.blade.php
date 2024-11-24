<x-app-layout>

    <h5 class="mt-3">Gerenciar Rotas</h5>

    <a class="btn btn-success" href="/rota/create">
        Inserir uma nova rota
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Origem</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rota as $r)
            <tr>
                <td>{{ $r->estado_inicio }}</td>
                <td>-</td>
                <td>{{ $r->cidade_inicio }}</td>
                <td>Destino -></td>
                <td>{{ $r->estado_final }}</td>
                <td>-</td>
                <td>{{ $r->cidade_final }}</td>
                <td>
                    <a href="/rota/{{ $r->id }}/edit" class="btn btn-warning">Alterar</a>
                    <form action="/rota/{{ $r->id }}" method="POST" style="display:inline;">
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