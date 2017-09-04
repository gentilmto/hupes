<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaNotificacaoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ficha_notificacao';

    /**
     * Run the migrations.
     * @table ficha_notificacao
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('permissao', 1)->nullable()->default(null);
            $table->dateTime('dataEntrada')->nullable()->default(null);
            $table->integer('ram_tipo_ram_id');
            $table->integer('avaliacao_id');
            $table->integer('paciente_prontuario');
            $table->string('qr')->nullable();

            $table->index(["avaliacao_id"], 'fk_ficha_notificacao_avaliacao1_idx');

            $table->index(["paciente_prontuario"], 'fk_ficha_notificacao_paciente1_idx');


            $table->foreign('avaliacao_id', 'fk_ficha_notificacao_avaliacao1_idx')
                ->references('id')->on('avaliacao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('paciente_prontuario', 'fk_ficha_notificacao_paciente1_idx')
                ->references('prontuario')->on('paciente')
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
