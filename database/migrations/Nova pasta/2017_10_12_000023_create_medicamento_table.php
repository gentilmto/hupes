<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medicamento';

    /**
     * Run the migrations.
     * @table medicamento
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('atc', 45);
			$table->string('nome', 45);
            $table->string('indicacao', 45)->nullable();
            $table->string('lote', 45)->nullable();
            $table->dateTime('validade')->nullable();
            $table->string('modalidade', 45)->nullable();
            $table->string('cid', 45);
            $table->integer('grupo_farmacologico_id_grupo_farmacologico');

            $table->index(["grupo_farmacologico_id_grupo_farmacologico"], 'fk_medicamento_grupo_farmacologico1_idx');


            $table->foreign('grupo_farmacologico_id_grupo_farmacologico', 'fk_medicamento_grupo_farmacologico1_idx')
                ->references('id_grupo_farmacologico')->on('grupo_farmacologico')
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
