<div>
    <div>
        <h1>Perfil</h1>
    </div>
    <div>
        <ul>
            <li>Nome: {{ $assistida->nome }}</li>
            <li>Idade: {{ $assistida->idade }}</li>
            <li>Bairro: {{ $assistida->bairro }}</li>
            <li>Municipio: {{ $assistida->municipio }}</li>
        </ul>
    </div>
    <div>
        <button><a href="{{ route('listar-assistidas') }}">Voltar</a></button>
    </div>
</div>


