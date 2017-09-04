<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'paciente';

    /**
     * Run the migrations.
     * @table paciente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('prontuario');
            $table->float('peso')->nullable()->default(null);
            $table->string('nome', 80);
            $table->date('dataNas');
            $table->integer('idade')->nullable()->default(null);
            $table->integer('id');
            $table->unsignedInteger('sexo_id');
            $table->unsignedInteger('cor_id');

            $table->index(["sexo_id"], 'fk_paciente_sexo1_idx');

          
            $table->unique(["id"], 'id_UNIQUE');


            $table->foreign('cor_id', 'fk_paciente_cor1_idx')
                ->references('id')->on('cor')
                ->onDelete('no action')
                ->onUpdate('no action');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
