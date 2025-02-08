<h1>Perfil</h1>

<ul>
    <li>Nome: {{ $assistida->nome }}</li>
    <li>Idade: {{ $assistida->idade }}</li>
    <li>Bairro: {{ $assistida->bairro }}</li>
    <li>Municipio: {{ $assistida->municipio }}</li>
</ul>

<button><a href="{{ url()->previous() }}">Voltar</a></button>



