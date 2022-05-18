<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class ViaCEP{
    public function buscar(string $cep){
        $url = sprintf('https://viacep.com.br/ws/%s/json/', $cep);
        $reposta = Http::get($url);
        if($reposta->failed()){
            return false
        }
        $dados = $reposta->json();
        if(isset($dados['erro']) && $dados['erro'] === true){
            return false;
        }
        return $dados
    }
}
