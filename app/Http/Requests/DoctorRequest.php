<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests
 */
class DoctorRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'crm' => ['required', 'string', 'max:20'],
            'expertise_id' => ['required', 'numeric']
        ];
    }
}