<h1>Formulario Editar Medida</h1>

<form action="{{ route('atualizar-medida', ['id' => $medida->id]) }}" method="post">

    @csrf

    @method('PUT')

    <div>

        <label for="processo_sei">processo_sei:</label>
        <input type="text" name="processo_sei" id="processo_sei" value="{{ old('processo_sei', $medida->processo_sei) }}" required>
        @error('processo_sei')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="medida_protetiva">medida_protetiva:</label>
        <input type="text" name="medida_protetiva" id="medida_protetiva" value="{{ old('medida_protetiva', $medida->medida_protetiva) }}"  required>
        @error('medida_protetiva')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="assistida_id">assistida_id:</label>
        <input type="number" name="assistida_id" id="assistida_id" value="{{ old('assistida_id', $medida->assistida_id) }}"  required>
        @error('assistida_id')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="situacao">situacao:</label>
        <input type="text" name="situacao" id="situacao" value="{{ old('situacao', $medida->situacao) }}" required>
        @error('situacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="nivel_risco">nivel_risco:</label>
        <input type="text" name="nivel_risco" id="nivel_risco" value="{{ old('nivel_risco', $medida->nivel_risco) }}" required>
        @error('nivel_risco')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="agressor_id">agressor_id:</label>
        <input type="number" name="agressor_id" id="agressor_id" value="{{ old('agressor_id', $medida->agressor_id) }}" required>
        @error('agressor_id')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="relacao_vitima_agressor">relacao_vitima_agressor:</label>
        <input type="text" name="relacao_vitima_agressor" id="relacao_vitima_agressor" value="{{ old('relacao_vitima_agressor', $medida->relacao_vitima_agressor) }}" required>
        @error('relacao_vitima_agressor')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="restricoes_agressor">restricoes_agressor:</label>
        <input type="text" name="restricoes_agressor" id="restricoes_agressor" value="{{ old('restricoes_agressor', $medida->restricoes_agressor) }}" required>
        @error('restricoes_agressor')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="inicio">inicio:</label>
        <input type="text" name="inicio" id="inicio" value="{{ old('inicio', $medida->inicio) }}" required>
        @error('inicio')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        {{-- <label for="previsao_termino">previsao_termino:</label>
        <input type="text" name="previsao_termino" id="previsao_termino" value="{{ old('previsao_termino', $medida->previsao_termino) }}"  required>
        @error('previsao_termino')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="renovacao">renovacao:</label>
        <input type="text" name="renovacao" id="renovacao" value="{{ old('renovacao', $medida->renovacao) }}"  required>
        @error('renovacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br>

        <label for="revogacao">revogacao:</label>
        <input type="text" name="revogacao" id="revogacao" value="{{ old('revogacao', $medida->revogacao) }}"  required>
        @error('revogacao')
            <div>{{ $message }}</div>
        @enderror
        <br><br> --}}

    </div>
    {{-- Botoes de ação --}}
    <div>
        <button><a href="{{ route('listar-medidas') }}">Cancelar</a></button>
        <button type="submit">Salvar</button>
    </div>
</form>