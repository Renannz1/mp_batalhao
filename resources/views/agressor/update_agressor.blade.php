<h1>Atualizano uma a Agressor</h1>

<form action="{{ route('atualizar-agressor', $agressor->id) }}" method="post">

    @csrf
    
    @method('PUT')

    <div>
        <h3>Dados da Agressor</h3> 

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $agressor->nome) }}" required>
        @error('nome')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade" value="{{ old('idade', $agressor->idade) }}">
        @error('idade')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        

        <h3>Endereço da Agressor</h3>

        <label for="logradouro">Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $agressor->logradouro) }}" required>
        @error('logradouro')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="bairro">Bairro: </label>
        <input type="text" name="bairro" id="bairro" value="{{ old('bairro', $agressor->bairro) }}" required>
        @error('bairro')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="municipio">Município: </label>
        <input type="text" name="municipio" id="municipio" value="{{ old('municipio', $agressor->municipio) }}" required>
        @error('municipio')
            <div>{{ $message }}</div>
         @enderror
        <br><br>
    </div>

    {{-- botões para salvar e cancelar --}}
    <div>
        <br><br>
        <button><a href="{{ route('listar-agressores') }}">Cancelar</a></button>
        <button type="submit">Salvar</button>
    </div>
</form>