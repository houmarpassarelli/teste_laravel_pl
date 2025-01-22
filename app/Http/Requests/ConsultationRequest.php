<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @package App\Http\Requests
 */
class ConsultationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'patient_id' => ['required', 'numeric'],
            'doctor_id' => ['required', 'numeric'],
            'consultation_date' => ['required', 'date'],
            'consultation_scheduling' => ['required', 'date'],
        ];
    }
}