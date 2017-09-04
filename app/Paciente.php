<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cor;
use App\Paciente;
class Paciente extends Model
{
//    protected $fillable = array('*');

    public $table="paciente";
   protected $primaryKey ="prontuario";
    public $timestamps = false;
	protected $fillable=['prontuario','peso', 'nome', 'dataNas', 'idade','sexo_id', 'cor_id'];


public function cor()
    {
        return $this->hasOne(Cor::class,'id','cor_id');

    }


}
