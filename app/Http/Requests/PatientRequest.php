<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests
 */
class PatientRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'cpf' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'address_number' => ['string', 'max:10'],
            'cep' => ['required', 'string', 'max:20']
        ];
    }
}