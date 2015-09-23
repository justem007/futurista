<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTituloBlocosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_blocos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_titulobloco', 255);
            $table->text('descricao_titulobloco');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('titulo_blocos');
    }
}
