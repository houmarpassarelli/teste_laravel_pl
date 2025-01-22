<?php

namespace App\Http\Resources;

use App\Models\Patient;

class PatientViewResource
{
    public function getPatients()
    {
        return Patient::all();
    }
}