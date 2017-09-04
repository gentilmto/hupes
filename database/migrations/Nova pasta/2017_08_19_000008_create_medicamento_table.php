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
            $table->string('lote', 45)->nullable()->default(null);
            $table->integer('validade')->nullable()->default(null);
            $table->string('modalidade', 45)->nullable()->default(null);
            $table->string('cid', 45);
            $table->string('grupo_farmacologico_id', 10);

            $table->index(["grupo_farmacologico_id"], 'fk_medicamento_grupo_farmacologico1_idx');

            $table->unique(["atc"], 'act_UNIQUE');
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
