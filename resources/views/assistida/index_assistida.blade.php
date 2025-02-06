


<div>
    <h1>Listando os dados de todas Assistidas</h1>
    <table>
        <thead class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assistidas as $assistida)
            <tr>
                <td>{{ $assistida->id }}</td>
                <td>{{ $assistida->nome }}</td>
                <td><button><a href="{{ route('detalhar-assistida', ['id' => $assistida->id]) }}">Detalhes</a></button></td>
                <td><button><a href="{{ route('editar-assistida') }}">Editar</a></button></td>
                <td><button><a href="{{ route('excluir-assistida') }}">Excluir</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <br><button><a href="{{ route('nova-assistida') }}">Adicionar Assistida</a></button>
</div>

