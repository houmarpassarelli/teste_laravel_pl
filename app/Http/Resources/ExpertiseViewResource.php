<?php

namespace App\Http\Resources;

use App\Models\Expertise;

class ExpertiseViewResource
{
    public function getExpertises()
    {
        return Expertise::all();
    }
}