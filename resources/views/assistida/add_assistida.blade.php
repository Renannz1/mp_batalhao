@extends('layouts.main_layout')

@section('titulo', 'Nova Assistida')
@section('sub-titulo', 'Nova Assistida')
@section('descricao')
    <p class="mt-0 mb-0">Preencha o formulário com as informações da assistida para realizar o cadastro.</p>
@endsection

@section('content')

<div class="card mb-5">
        <div class="card-body">

            <form action="{{ route('criar-assistida') }}" method="post">

                @csrf

                <div class="mb-3 d-flex align-items-center">
                    <label for="nome" class="form-label me-2" style="width: 150px;">Nome: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}">
                        @error('nome') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="idade" class="form-label me-2" style="width: 150px;">Idade: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="idade" id="idade" value="{{ old('idade') }}">
                        @error('idade') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div> 
                
                <div class="mb-3 d-flex align-items-center">
                    <label for="telefone" class="form-label me-2" style="width: 150px;">Telefone: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone') }}">
                        @error('telefone') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <hr class="mb-5 mt-5"> 

                <div class="mb-3 d-flex align-items-center">
                    <label for="logradouro" class="form-label me-2" style="width: 150px;">Logradouro: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{ old('logradouro') }}">
                        @error('logradouro') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="numero" class="form-label me-2" style="width: 150px;">Número: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="numero" id="numero" value="{{ old('numero') }}">
                        @error('numero') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3 d-flex align-items-center">
                    <label for="quadra" class="form-label me-2" style="width: 150px;">Quadra: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="quadra" id="quadra" value="{{ old('quadra') }}">
                        @error('quadra') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="bloco" class="form-label me-2" style="width: 150px;">Bloco: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="bloco" id="bloco" value="{{ old('bloco') }}">
                        @error('bloco') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="apartamento" class="form-label me-2" style="width: 150px;">Apartamento: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="apartamento" id="apartamento" value="{{ old('apartamento') }}">
                        @error('apartamento') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="bairro" class="form-label me-2" style="width: 150px;">Bairro: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="bairro" id="bairro" value="{{ old('bairro') }}">
                        @error('bairro') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="complemento" class="form-label me-2" style="width: 150px;">Complemento: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="complemento" id="complemento" value="{{ old('complemento') }}">
                        @error('complemento') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="municipio" class="form-label me-2" style="width: 150px;">Munícipio: </label>
                    <div class="flex-grow-1">
                        <select name="municipio" id="municipio" class='form-select'>
                            <option value="">---</option>
                            <option value="Guanambi" {{ old('municipio') == 'Guanambi' ? 'selected' : '' }}>Guanambi</option>
                            <option value="Candiba" {{ old('municipio') == 'Candiba' ? 'selected' : '' }}>Candiba</option>
                            <option value="Cariranha" {{ old('municipio') == 'Cariranha' ? 'selected' : '' }}>Cariranha</option>
                        </select>
                        @error('municipio') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div> 

                {{-- Botões de ação --}}
                <div class="d-flex justify-content-end mt-4 gap-4">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Criar Assistida</button>
                </div>                 
                     
            </form>

        </div>
</div>

@endsection
