<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'avaliacao';

    /**
     * Run the migrations.
     * @table avaliacao
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('status', 45)->nullable();
            $table->string('avaliador', 45)->nullable()->default(null);
            $table->dateTime('dataAvaliacao')->nullable()->default(null);
            $table->dateTime('dataChegada');
            $table->dateTime('dataEnvioOrg')->nullable();
            $table->unsignedInteger('status_notificacao_id');

            $table->index(["status_notificacao_id"], 'fk_avaliacao_status_notificacao1_idx');


            $table->foreign('status_notificacao_id', 'fk_avaliacao_status_notificacao1_idx')
                ->references('id')->on('status_notificacao')
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
