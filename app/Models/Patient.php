<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use App\Casts\RemoveMaskCast;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'cep',
        'address',
        'address_number'
    ];

    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class, "patient_id","id");
    }

    protected function casts(): array
    {
        $fields = ['cep', 'cpf', 'phone'];

        return array_fill_keys($fields, RemoveMaskCast::class);
    }
}
