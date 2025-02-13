<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgressorRequest extends FormRequest
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
        return [
            'nome' => 'required|string|max:255',
            'idade' => 'nullable|integer|min:0',
            'telefone' => 'nullable|string|unique:assistidas,telefone|max:20',
            'logradouro' => 'required|string|max:255',
            'numero' => 'nullable|string|max:10',
            'quadra' => 'nullable|string|max:10',
            'bloco' => 'nullable|string|max:10',
            'apartamento' => 'nullable|string|max:10',
            'bairro' => 'required|string|max:255',
            'complemento' => 'nullable|string|max:255',
            'municipio' => 'required|string|max:255',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.string' => 'O campo Nome deve ser um texto.',
            'nome.max' => 'O campo Nome não pode ter mais que 255 caracteres.',
    
            'idade.integer' => 'O campo Idade deve ser um número inteiro.',
            'idade.min' => 'O campo Idade não pode ser negativo.',
    
            'telefone.unique' => 'Este telefone já está cadastrado.',
            'telefone.string' => 'O campo Telefone deve ser um texto.',
            'telefone.max' => 'O campo Telefone não pode ter mais que 20 caracteres.',
    
            'logradouro.required' => 'O campo Logradouro é obrigatório.',
            'logradouro.string' => 'O campo Logradouro deve ser um texto.',
            'logradouro.max' => 'O campo Logradouro não pode ter mais que 255 caracteres.',
    
            'numero.string' => 'O campo Número deve ser um texto.',
            'numero.max' => 'O campo Número não pode ter mais que 10 caracteres.',
    
            'quadra.string' => 'O campo Quadra deve ser um texto.',
            'quadra.max' => 'O campo Quadra não pode ter mais que 10 caracteres.',
    
            'bloco.string' => 'O campo Bloco deve ser um texto.',
            'bloco.max' => 'O campo Bloco não pode ter mais que 10 caracteres.',
    
            'apartamento.string' => 'O campo Apartamento deve ser um texto.',
            'apartamento.max' => 'O campo Apartamento não pode ter mais que 10 caracteres.',
    
            'bairro.required' => 'O campo Bairro é obrigatório.',
            'bairro.string' => 'O campo Bairro deve ser um texto.',
            'bairro.max' => 'O campo Bairro não pode ter mais que 255 caracteres.',
    
            'complemento.string' => 'O campo Complemento deve ser um texto.',
            'complemento.max' => 'O campo Complemento não pode ter mais que 255 caracteres.',
    
            'municipio.required' => 'O campo Município é obrigatório.',
            'municipio.string' => 'O campo Município deve ser um texto.',
            'municipio.max' => 'O campo Município não pode ter mais que 255 caracteres.',
        ];
    }
}
