<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agressor extends Model
{
    // um agressor pode ter várias medidas
    public function medidas(){
        return $this->hasMany(Medida::class);
    }
}
