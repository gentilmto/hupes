<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamHasMedicamentoSuspeitosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ram_has_medicamento_suspeitos';

    /**
     * Run the migrations.
     * @table ram_has_medicamento_suspeitos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ram_id');
            $table->string('dose', 45)->nullable();
            $table->dateTime('dataInicio');
            $table->dateTime('dataFim');
            $table->string('indicacao', 45);
            $table->integer('medicamento_id');

            $table->index(["ram_id"], 'fk_ram_has_medicamento_suspeitos_ram1_idx');

            $table->index(["medicamento_id"], 'fk_ram_has_medicamento_suspeitos_medicamento1_idx');


            $table->foreign('ram_id', 'fk_ram_has_medicamento_suspeitos_ram1_idx')
                ->references('id')->on('ram')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('medicamento_id', 'fk_ram_has_medicamento_suspeitos_medicamento1_idx')
                ->references('id')->on('medicamento')
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
