<x-app-layout>

    <h5 class="mt-3">Gerenciar Rotas</h5>

    <a class="btn btn-success" href="/rota/create">
        Inserir uma nova rota
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Estado de início</th>
                <th>Cidade de início</th>
                <th>Estado final</th>
                <th>Cidade final</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rota as $r)
            <tr>
                <td>{{ $r->nome }}</td>
                <td>{{ $r->habilitacao }}</td>
                <td>{{ $r->telefone }}</td>
                <td>{{ $r->idade }}</td>
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