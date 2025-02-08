<h1>Detalhes da Medida</h1>

<ul>
    <li>Id: {{ $medida->id }}</li>
    <li>SEI: {{ $medida->processo_sei }}</li>
    <li>N° Medida: {{ $medida->medida_protetiva }}</li>
    <li>Assistida: <a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}">
        {{ $medida->assistida->nome }}
    </a></li>
    <li>Situação: {{ $medida->situacao }}</li>
    <li>Nível de risco:{{ $medida->nivel_risco }}</li>
    <li>Agressor: <a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}">
        {{ $medida->agressor->nome }}
    </a></li>
    <li>Relção: {{ $medida->relacao_vitima_agressor }}</li>
    <li>Restrições: {{ $medida->restricoes_agressor }}</li>
    <li>Início: {{ $medida->inicio }}</li>
    <li>Término: {{ $medida->previsao_termino }}</li>
    <li>Renovação: {{ $medida->renovacao }}</li>
    <li>Revogação: {{ $medida->revogacao }}</li>
</ul> 

{{-- <h2>Dados da Assistida</h2>
<h2>Dados do agressor</h2> --}}

<button><a href="{{ url()->previous() }}">Voltar</a></button>