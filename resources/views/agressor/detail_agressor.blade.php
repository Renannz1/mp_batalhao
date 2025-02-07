<h1>Perfil</h1>

<ul>
    <li>Nome: {{$agressor->nome}}</li>
    <li>Idade: {{$agressor->idade}}</li>
    <li>Bairro: {{$agressor->bairro}}</li>
    <li>Município: {{$agressor->municipio}}</li>
</ul>

<button><a href="{{ route('listar-agressores') }}">Voltar</a></button>