<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedidaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('id');

        return [
            'processo_sei' => 'required|string|max:255|unique:medidas,processo_sei,' . $id,  
            'medida_protetiva' => 'required|string|max:255|unique:medidas,medida_protetiva,' . $id,  
            'assistida_id' => 'required|exists:assistidas,id',  
            'situacao' => 'required|string|max:255',  
            'nivel_risco' => 'required',  
            'agressor_id' => 'required|exists:agressores,id',  
            'relacao_vitima_agressor' => 'required|string|max:255',  
            'restricoes_agressor' => 'required|string|max:255',  
            'inicio' => 'required|date',  
            'previsao_termino' => 'nullable|date|after_or_equal:inicio',  
            'renovacao' => 'nullable|date|after_or_equal:inicio',  
            'revogacao' => 'nullable|date|after_or_equal:inicio', 
        ];
    }

    public function messages()
    {
        return [
            'processo_sei.required' => 'O campo Processo SEI é obrigatório.',
            'processo_sei.string' => 'O campo Processo SEI deve ser um texto.',
            'processo_sei.max' => 'O campo Processo SEI não pode ter mais que 255 caracteres.',
            'processo_sei.unique' => 'Este Processo SEI já está cadastrado.',


            'medida_protetiva.required' => 'O campo Medida Protetiva é obrigatório.',
            'medida_protetiva.string' => 'O campo Medida Protetiva deve ser um texto.',
            'medida_protetiva.max' => 'O campo Medida Protetiva não pode ter mais que 255 caracteres.',
            'medida_protetiva.unique' => 'Esta Medida Protetiva já está cadastrada.',

            'assistida_id.required' => 'O campo Assistida é obrigatório.',
            'assistida_id.exists' => 'A Assistida selecionada não foi encontrada.',

            'situacao.required' => 'O campo Situação é obrigatório.',
            'situacao.string' => 'O campo Situação deve ser um texto.',
            'situacao.max' => 'O campo Situação não pode ter mais que 255 caracteres.',

            'nivel_risco.required' => 'O campo Nível de Risco é obrigatório.',

            'agressor_id.required' => 'O campo Agressor é obrigatório.',
            'agressor_id.exists' => 'O Agressor selecionado não foi encontrado.',

            'relacao_vitima_agressor.required' => 'O campo Relação entre Vítima e Agressor é obrigatório.',
            'relacao_vitima_agressor.string' => 'O campo Relação entre Vítima e Agressor deve ser um texto.',
            'relacao_vitima_agressor.max' => 'O campo Relação entre Vítima e Agressor não pode ter mais que 255 caracteres.',

            'restricoes_agressor.required' => 'O campo Restrições do Agressor é obrigatório.',
            'restricoes_agressor.string' => 'O campo Restrições do Agressor deve ser um texto.',
            'restricoes_agressor.max' => 'O campo Restrições do Agressor não pode ter mais que 255 caracteres.',

            'inicio.required' => 'O campo Data de Início é obrigatório.',
            'inicio.date' => 'O campo Data de Início deve ser uma data válida.',

            'previsao_termino.date' => 'O campo Previsão de Término deve ser uma data válida.',
            'previsao_termino.after_or_equal' => 'A Previsão de Término deve ser igual ou posterior à Data de Início.',

            'renovacao.date' => 'O campo Renovação deve ser uma data válida.',
            'renovacao.after_or_equal' => 'A data de Renovação deve ser igual ou posterior à Data de Início.',

            'revogacao.date' => 'O campo Revogação deve ser uma data válida.',
            'revogacao.after_or_equal' => 'A data de Revogação deve ser igual ou posterior à Data de Início.',
        ];
    }
}
