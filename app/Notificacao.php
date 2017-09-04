<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{


protected $table ='notificacao';
public $timestamps= false;


protected $fillable=['paciente_prontuario','avaliacao_id','ram_tipo_ram_id','id','data_final_validacao','data_inicio_validacao','data_notificacao_ficha'];









public function paciente()
    {
        return $this->hasOne(Paciente::class,'id');

    }

public function rams()
    {
        return $this->hasMany(Ram::class,'id');

    }



public function avaliacao()
    {
        return $this->hasOne(avaliacao::class,'id');

    }






    //
}
