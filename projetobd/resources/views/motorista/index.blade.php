<x-app-layout>

    <h5 class="mt-3">Gerenciar Motoristas</h5>

    <a class="btn btn-success" href="/motorista/create">
        Inserir um novo motorista
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Habilitação</th>
                <th>Telefone</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motorista as $d)
            <tr>
                <td>{{ $d->nome }}</td>
                <td>{{ $d->habilitacao }}</td>
                <td>{{ $d->telefone }}</td>
                <td>{{ $d->idade }}</td>
                <td>
                    <a href="/motorista/{{ $d->id }}/edit" class="btn btn-warning">Alterar</a>
                    <form action="/motorista/{{ $d->id }}" method="POST" style="display:inline;">
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