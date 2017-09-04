<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaNotificacaoHasRamTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ficha_notificacao_has_ram';

    /**
     * Run the migrations.
     * @table ficha_notificacao_has_ram
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('ram_id');
            $table->integer('fichaNotificacao_id');

            $table->index(["fichaNotificacao_id"], 'fk_ficha_notificacao_has_ram_ficha_notificacao1_idx');


            $table->foreign('fichaNotificacao_id', 'fk_ficha_notificacao_has_ram_ficha_notificacao1_idx')
                ->references('id')->on('ficha_notificacao')
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
