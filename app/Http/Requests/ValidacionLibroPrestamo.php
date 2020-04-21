<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionLibroPrestamo extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'libro_id' => 'required|integer',
            'prestado_a' => 'required|max:100',
            'fecha_prestamo' => 'required|date_format:Y-m-d'
        ];
    }
}
