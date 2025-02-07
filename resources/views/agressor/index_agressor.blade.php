


<div>
    <h1>Listando os dados de todos Agressores</h1>
    <table>
        <thead class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agressores as $agressor)
            <tr>
                <td>{{ $agressor->id }}</td>
                <td>{{ $agressor->nome }}</td>
                <td><button><a href="{{ route('detalhar-agressor', ['id' => $agressor->id]) }}">Detalhes</a></button></td>
                <td><button><a href="{{ route('form-editar-agressor', ['id' => $agressor->id]) }}">Editar</a></button></td>
                <td><button><a href="">Excluir</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
    <br><button><a href="{{ route('form-novo-agressor') }}">Adicionar agressor</a></button>
</div>

