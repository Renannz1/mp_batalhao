<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistida extends Model
{
    // uma mulher pode ter várias medidas
    public function medidas(){
        return $this->hasMany(Medida::class);
    }
}
