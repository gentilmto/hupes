<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = "medicamento";
    protected $fillable=['act','indicacao','lote','validade','modalidade','cid','grupo_farmacologico_id_grupo_farmacologico','nome'];



}

