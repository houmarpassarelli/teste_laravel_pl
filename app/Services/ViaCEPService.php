<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCEPService
{
    static public function getCep($cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        return $response->successful()
            ? $response->json()
            : ['error' => '400 Bad Request'];
    }
}