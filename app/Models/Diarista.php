<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    protected $fillable = [
        'nome_completo',
        'cpf',
        'email',
        'telefone',
        'endereco_completo',
        'ibge',
        'cep',
        'estado'
    ];
    protected $visible = ['nome_completo', 'cep', 'estado', 'reputacao'];

    protected $appends  = ['reputacao'];

    use HasFactory;
    public function getReputacaoAttribute($valor){
        return mt_rand(1,5);
    }
    static public function buscarPorCodigoIbge($codigo){
        return self::where('ibge', $codigo)->limit(6)->get();
    }
}
