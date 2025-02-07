<h1>Novo Agressor</h1>

<form action="{{ route('criar-agressor') }}" method="post">

    @csrf

    <div>
        <h3>Dados do Agressor</h3>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required><br><br>
        @error('nome')
            <div>{{ $message }}</div>
        @enderror

        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade"><br><br>
        @error('idade')
            <div>{{ $message }}</div>
        @enderror



        <h3>Endereço do Agressor</h3>

        <label for="logradouro">Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro" required><br><br>
        @error('logradouro')
            <div>{{ $message }}</div>
        @enderror

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" id="bairro" required><br><br>
        @error('bairro')
            <div>{{ $message }}</div>
        @enderror

        <label for="municipio">Município: </label>
        <input type="text" name="municipio" id="municipio" required><br><br>
        @error('municipio')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <br><button><a href="{{ route('listar-agressores') }}">Cancelar</a></button>
        <button type="submit">Adicionar Novo Agressor</button>
    </div>
</form>