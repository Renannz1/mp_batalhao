<h1>Formulario Nova Medida</h1>

<form action="{{ route('criar-medida') }}" method="post">

    @csrf

    <div>

        <label for="processo_sei">processo_sei:</label>
        <input type="text" name="processo_sei" id="processo_sei" value="{{ old('processo_sei') }}"  required>
        @error('processo_sei')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="medida_protetiva">medida_protetiva:</label>
        <input type="text" name="medida_protetiva" id="medida_protetiva" value="{{ old('medida_protetiva') }}"  required>
        @error('medida_protetiva')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="assistida_id">assistida_id:</label>
        <input type="number" name="assistida_id" id="assistida_id" value="{{ old('assistida_id') }}"  required>
        @error('assistida_id')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="situacao">situacao:</label>
        <input type="text" name="situacao" id="situacao" value="{{ old('situacao') }}"  required>
        @error('situacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nivel_risco">nivel_risco:</label>
        <input type="text" name="nivel_risco" id="nivel_risco" value="{{ old('nivel_risco') }}"  required>
        @error('nivel_risco')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="agressor_id">agressor_id:</label>
        <input type="number" name="agressor_id" id="agressor_id" value="{{ old('agressor_id') }}"  required>
        @error('agressor_id')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="relacao_vitima_agressor">relacao_vitima_agressor:</label>
        <input type="text" name="relacao_vitima_agressor" id="relacao_vitima_agressor" value="{{ old('relacao_vitima_agressor') }}"  required>
        @error('relacao_vitima_agressor')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="restricoes_agressor">restricoes_agressor:</label>
        <input type="text" name="restricoes_agressor" id="restricoes_agressor" value="{{ old('restricoes_agressor') }}"  required>
        @error('restricoes_agressor')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="inicio">inicio:</label>
        <input type="text" name="inicio" id="inicio" value="{{ old('inicio') }}"  required>
        @error('inicio')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        {{-- <label for="previsao_termino">previsao_termino:</label>
        <input type="text" name="previsao_termino" id="previsao_termino" value="{{ old('previsao_termino') }}"  required>
        @error('previsao_termino')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="renovacao">renovacao:</label>
        <input type="text" name="renovacao" id="renovacao" value="{{ old('renovacao') }}"  required>
        @error('renovacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="revogacao">revogacao:</label>
        <input type="text" name="revogacao" id="revogacao" value="{{ old('revogacao') }}"  required>
        @error('revogacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br> --}}

    </div>
    {{-- Botoes de ação --}}
    <div>
        <button><a href="{{ route('listar-medidas') }}">Cancelar</a></button>
        <button type="submit">Criar Nova Medida</button>
    </div>
</form>