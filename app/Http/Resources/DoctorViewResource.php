<?php

namespace App\Http\Resources;

use App\Models\Doctor;

class DoctorViewResource
{
    public function getDoctors()
    {
        return Doctor::all();
    }
}