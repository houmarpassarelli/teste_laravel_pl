<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultationFactory> */
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'consultation_date',
        'consultation_scheduling'
    ];

    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class, "doctor_id", "id");
    }

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class, "patient_id", "id");
    }
}
