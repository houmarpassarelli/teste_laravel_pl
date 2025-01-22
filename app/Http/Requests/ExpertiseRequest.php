<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests
 */
class ExpertiseRequest extends FormRequest
{
    public function rules()
    {
        return [
            'label' => ['required', 'string', 'max:255']
        ];
    }
}