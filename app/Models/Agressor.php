<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agressor extends Model
{
    protected $table = 'agressores';

    use HasFactory;

    protected $fillable = [
        'nome', 'idade', 'telefone', 'logradouro', 'numero', 
        'quadra', 'bloco', 'apartamento', 'bairro', 
        'complemento', 'municipio'
    ];

    // um agressor pode ter várias medidas
    public function medidas(){
        return $this->hasMany(Medida::class);
    }
}
