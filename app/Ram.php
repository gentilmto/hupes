<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    

public function avaliacao()
    {
        return $this->hasOne(Avaliacao::class,'id');

    }

public function notificacao()
    {
        return $this->belongto(Notificacao::class,'id');

    }


public function medsus()
    {
        return $this->hasMany(Medsus::class,'id');

    }




    }
