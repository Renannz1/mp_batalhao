<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;

    protected $fillable = [
        'processo_sei', 'medida_protetiva', 'assistida_id', 'situacao', 'nivel_risco', 'agressor_id', 'relacao_vitima_agressor', 'restricoes_agressor', 'inicio', 'previsao_termino', 'renovacao', 'revogacao'
    ];

    public function assistida(){
        return $this->belongsTo(Assistida::class);
    }

    public function agressor(){
        return $this->belongsTo(Agressor::class);
    }

}
