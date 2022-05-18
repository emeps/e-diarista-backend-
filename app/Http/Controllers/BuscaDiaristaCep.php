<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ViaCEP;
use App\Models\Diarista;

class BuscaDiaristaCep extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ViaCEP $viaCEP)
    {
        $endereco = $viaCEP->buscar($request->cep);
        if($endereco ===false){
            return response()->json(['erro' => 'Cep Inválido'],400);
        }
        return [
            'diaristas' => Diarista::buscarPorCodigoIbge($endereco['ibge'])
        ];
    }
}
