<h1>Confirme a Exclusão</h1>
<h3>Deseja realmente excluir a assistida: </h3>
<ul>
    <li>{{$assistida->nome}}</li>
    <li>{{$assistida->idade}}</li>
    <li>{{$assistida->bairro}}</li>
</ul>
<button><a href="{{ route('listar-assistidas') }}">Cancelar</a></button>
<button><a href="{{ route('confirm-excluir-assistida', ['id' => $assistida->id]) }}">Excluir</a></button>


