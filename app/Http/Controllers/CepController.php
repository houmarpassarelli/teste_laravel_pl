<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ViaCEPService;
use App\Http\Resources\CepResource;
use Illuminate\Support\Facades\Validator;

class CepController extends Controller
{
    public function __invoke(Request $request, ViaCEPService $service)
    {
        $cep = $request->route('cep');

        $validator = Validator::make(['cep' => $cep], [
            'cep' => ['required', 'string', 'size:8']
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'CEP inválido!'], 422);
        }

        $result = $service::getCep($request->cep);

        return (new CepResource($result))->response();
    }
}