<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{

    //
 public $table="avaliacao";



public function rams()
    {
        return $this->hasMany(Ram::class,'id');

    }


public function notificacoes()
    {
        return $this->belongsto(Noificacao::class,'id');

    }




}
