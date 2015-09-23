<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFerramentasBlocosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferramentas_blocos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_ferramenta', 255);
            $table->text('descricao_ferramenta');
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
        Schema::drop('ferramentas_blocos');
    }
}
