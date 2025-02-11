@extends('layouts.main_layout')

@section('content')

<div class="container mb-5 mt-4">
    <h2 class="">Nova Medida Protetiva</h2>
    <p class="mb-5">Formulário para cadastrar uma nova medida protetiva.</p>

    <div class="card ">
        <div class="card-body">

            <form action="{{ route('criar-medida') }}" method="post">

                @csrf

                <div class="mb-3 d-flex align-items-center">
                    <label for="processo_sei" class="form-label me-2" style="width: 150px;">Processo SEI: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="processo_sei" id="processo_sei" value="{{ old('processo_sei') }}">
                        @error('processo_sei') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="medida_protetiva" class="form-label me-2" style="width: 150px;">Medida Protetiva: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="medida_protetiva" id="medida_protetiva" value="{{ old('medida_protetiva') }}">
                        @error('medida_protetiva') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div> 
                
                <div class="mb-3 d-flex align-items-center">
                    <label for="assistida_id" class="form-label me-2" style="width: 150px;">Id da Assistida: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="assistida_id" id="assistida_id" placeholder="Digite o id da assistida" value="{{ old('assistida_id') }}">
                        @error('assistida_id') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="situacao" class="form-label me-2" style="width: 150px;">Situação: </label>
                    <div class="flex-grow-1">
                        <select name="situacao" id="situacao" class="form-select">
                            <option value="">---</option>
                            <option value="ativa" {{ old('situacao') == 'ativa' ? 'selected' : '' }}>Ativa</option>
                            <option value="finalizada" {{ old('situacao') == 'finalizada' ? 'selected' : '' }}>Finalizada</option>
                            <option value="inativa" {{ old('situacao') == 'inativa' ? 'selected' : '' }}>Inativa</option>
                        </select>
                        @error('situacao') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="nivel_risco" class="form-label me-2" style="width: 150px;">Nível de risco: </label>
                    <div class="flex-grow-1">
                        <select name="nivel_risco" id="nivel_risco" class='form-select'>
                            <option value="">---</option>
                            <option value="baixo" {{ old('nivel_risco') == 'ativa' ? 'selected' : '' }}>Baixo</option>
                            <option value="medio" {{ old('nivel_risco') == 'ativa' ? 'selected' : '' }}>Médio</option>
                            <option value="inativa" {{ old('nivel_risco') == 'ativa' ? 'selected' : '' }}>Alto</option>
                        </select>
                        @error('nivel_risco') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div> 

                <div class="mb-3 d-flex align-items-center">
                    <label for="agressor_id" class="form-label me-2" style="width: 150px;">Id do Agressor: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="agressor_id" id="agressor_id" placeholder="Digite o id do agressor" value="{{ old('agressor_id') }}">
                        @error('agressor_id') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>  

                <div class="mb-3 d-flex align-items-center">
                    <label for="relacao_vitima_agressor" class="form-label me-2" style="width: 150px;">Relação Vítima/Agressor: </label>
                    <div class="flex-grow-1">
                        <select name="relacao_vitima_agressor" id="relacao_vitima_agressor" class='form-select'>
                            <option value="">---</option>
                            <option value="conjugue" {{ old('relacao_vitima_agressor') == 'conjugue' ? 'selected' : '' }}>Cônjuge</option>
                            <option value="companheiro" {{ old('relacao_vitima_agressor') == 'companheiro' ? 'selected' : '' }}>Companheiro(a)</option>
                            <option value="ex-conjugue" {{ old('relacao_vitima_agressor') == 'ex-conjugue' ? 'selected' : '' }}>Ex-cônjuge</option>
                            <option value="ex-companheiro" {{ old('relacao_vitima_agressor') == 'ex-companheiro' ? 'selected' : '' }}>Ex-companheiro(a)</option>
                            <option value="familiar" {{ old('relacao_vitima_agressor') == 'familiar' ? 'selected' : '' }}>Familiar</option>
                        </select>
                        @error('relacao_vitima_agressor') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div> 

                <div class="mb-3 d-flex align-items-center">
                    <label for="restricoes_agressor" class="form-label me-2" style="width: 150px;">Restrições do Agressor: </label>
                    <div class="flex-grow-1">
                        <input type="text" class="form-control" name="restricoes_agressor" id="restricoes_agressor" value="{{ old('restricoes_agressor') }}">
                        @error('restricoes_agressor') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>


                <hr class="mb-5 mt-5"> 


                <div class="mb-3 d-flex align-items-center">
                    <label for="inicio" class="form-label me-2" style="width: 150px;">Início: </label>
                    <div class="flex-grow-1">
                        <input type="date" class="form-control" name="inicio" id="inicio" value="{{ old('inicio') }}">
                        @error('inicio') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="previsao_termino" class="form-label me-2" style="width: 150px;">Previsão término: </label>
                    <div class="flex-grow-1">
                        <input type="date" class="form-control" name="previsao_termino" id="previsao_termino" value="{{ old('previsao_termino') }}">
                        @error('previsao_termino') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="renovacao" class="form-label me-2" style="width: 150px;">Renovação: </label>
                    <div class="flex-grow-1">
                        <input type="date" class="form-control" name="renovacao" id="renovacao" value="{{ old('renovacao') }}">
                        @error('renovacao') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="revogacao" class="form-label me-2" style="width: 150px;">Revogação: </label>
                    <div class="flex-grow-1">
                        <input type="date" class="form-control" name="revogacao" id="revogacao" value="{{ old('revogacao') }}">
                        @error('revogacao') 
                            <div class="text-danger mt-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>

                {{-- Botões de ação --}}
                <div class="d-flex justify-content-end mt-4 gap-4">
                    <a href="{{ route('listar-medidas') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Criar Nova Medida</button>
                </div>                 
                     
            </form>

        </div>
    </div>
</div>

@endsection
