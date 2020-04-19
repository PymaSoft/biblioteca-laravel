<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:50|unique:menu,nombre,' . $this->route('id'),
            'url' => ['required', 'max:100', new ValidarCampoUrl],
            'icono' => 'nullable|max:50'
        ];
    }
    
    /* public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es requerido',
            'url.required' => 'El campo url es requerida'
        ]; 
    } */
}
