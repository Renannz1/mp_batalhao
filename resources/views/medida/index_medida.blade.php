<h1>Listando todas as Medidas</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Processo SEI</th>
            <th>Medida Protetiva</th>
            <th>Assistida</th>
            <th>Situação</th>
            <th>Nível de Risco</th>
            <th>Agressor</th>
            <th>Relação VA</th>
            <th>Restrições Agressor</th>
            <th>Início</th>
            {{-- <th>Previsão Término</th>
            <th>Renovação</th>
            <th>Revogação</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($medidas as $medida)
        <tr>
            <td>{{ $medida->id }}</td>
            <td>{{ $medida->processo_sei }}</td>
            <td>{{ $medida->medida_protetiva }}</td>
            <td><a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}">
                {{ $medida->assistida->nome }}
            </a></td>
            <td>{{ $medida->situacao }}</td>
            <td>{{ $medida->nivel_risco }}</td>
            <td><a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}">
                {{ $medida->agressor->nome }}
            </a></td>
            <td>{{ $medida->relacao_vitima_agressor }}</td>
            <td>{{ $medida->restricoes_agressor }}</td>
            <td>{{ $medida->inicio }}</td>
            {{-- <td>{{ $medida->previsao_termino }}</td>
            <td>{{ $medida->renovacao }}</td>
            <td>{{ $medida->revogacao }}</td> --}}
            <td><button><a href="">Detalhar Medida</a></button></td>
            <td><button><a href="">Editar Medida</a></button></td>
            <td><button><a href="">Excluir Medida</a></button></td>
        </tr> 
        @endforeach
    </tbody>
</table>

<div>
    <br><br><button><a href="">Adicionar Nova Medida</a></button>
</div>
