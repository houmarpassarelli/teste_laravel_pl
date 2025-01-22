<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CepResource extends JsonResource
{
    /**
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'public_place' => mb_strtoupper($this['logradouro'], 'UTF-8') ?? '',
            'complement' => mb_strtoupper($this['complemento'], 'UTF-8') ?? '',
            'neighborhood' => mb_strtoupper($this['bairro'], 'UTF-8') ?? '',
            'fu' => mb_strtoupper($this['uf'], 'UTF-8') ?? '',
            'city' => mb_strtoupper($this['localidade'], 'UTF-8') ?? ''
        ];
    }
}