<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'crm',
        'expertise_id'
    ];

    public function expertise(): HasOne
    {
        return $this->hasOne(Expertise::class, 'id', 'expertise_id');
    }
}
