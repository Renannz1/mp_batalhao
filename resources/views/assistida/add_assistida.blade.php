<h1>Adicionando uma nova Assistida</h1>

<form action="{{ route('criar-assistida') }}" method="post">

    @csrf
    
    <div>
        <h3>Dados da Assistida</h3> 

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        @error('nome')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade" value="{{ old('idade') }}">
        @error('idade')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        

        <h3>Endereço da Assistida</h3>

        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro') }}" required>
        @error('logradouro')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}" required>
        @error('bairro')
            <div>{{ $message }}</div>
         @enderror
        <br><br>

        <label for="municipio">Município</label>
        <input type="text" name="municipio" id="municipio" value="{{ old('municipio') }}" required>
        @error('municipio')
            <div>{{ $message }}</div>
         @enderror
        <br><br>
    </div>

    {{-- botões para salvar e cancelar --}}
    <div>
        <br><br>
        <button><a href="{{ route('listar-assistidas') }}">Cancelar</a></button>
        <button type="submit">Adicionar nova Assistida</button>
    </div>
</form>