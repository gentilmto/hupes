<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medsus extends Model
{
    //

public function ram()
    {
        return $this->belongto(Ram::class,'id');

    }


public function medicamento()
    {
        return $this->hasOne(Ram::class,'id');

    }






}
