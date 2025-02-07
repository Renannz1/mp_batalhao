<h1>Novo Agressor</h1>

<form action="{{ route('criar-agressor') }}" method="post">

    @csrf

    <div>
        <h3>Dados do Agressor</h3>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        <br><br>
        @error('nome')
            <div>{{ $message }}</div>
        @enderror

        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade" value="{{ old('idade') }}">
        <br><br>
        @error('idade')
            <div>{{ $message }}</div>
        @enderror



        <h3>Endereço do Agressor</h3>

        <label for="logradouro">Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro') }}" required>
        <br><br>
        @error('logradouro')
            <div>{{ $message }}</div>
        @enderror

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}" required>
        <br><br>
        @error('bairro')
            <div>{{ $message }}</div>
        @enderror

        <label for="municipio">Município: </label>
        <input type="text" name="municipio" id="municipio" value="{{ old('municipio') }}" required>
        <br><br>
        @error('municipio')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <br><button><a href="{{ route('listar-agressores') }}">Cancelar</a></button>
        <button type="submit">Adicionar Novo Agressor</button>
    </div>
</form>