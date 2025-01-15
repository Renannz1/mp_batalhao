<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    public function assistida(){
        $this->belongsTo(Assistida::class);
    }

    public function agressor(){
        $this->belongsTo(Agressor::class);
    }

}
