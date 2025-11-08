<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\TarefaController;

class TarefaRequest extends FormRequest
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
            'titulo'=> 'required|string',
            'descricao'=> 'required|string|min:15',
            'status'=> 'required|in:1,0',
        ];
    }

    public function mensagem(){
        return [
            'titulo.required'=> "Campo titulo é obrigatório",
            'descricao.min'=> "Campo Descrição precisa ter mais de :min caracteres"
        ];
    }
}
