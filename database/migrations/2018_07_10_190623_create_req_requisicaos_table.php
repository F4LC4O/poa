<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqRequisicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_petro')->create('req_requisicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_projeto', 150);
            $table->string('centro_custo', 150);
            
            $table->integer('fk_material')->unsigned();
            $table->foreign('fk_material')->references('id')->on('req_materials');
            
            $table->integer('fk_petrografia')->unsigned();
            $table->foreign('fk_petrografia')->references('id')->on('req_petrografias');

            $table->integer('fk_geoquimica')->unsigned();
            $table->foreign('fk_geoquimica')->references('id')->on('req_geoquimicas');

            $table->integer('fk_finalidade')->unsigned();
            $table->foreign('fk_finalidade')->references('id')->on('req_finalidades');
            
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
        Schema::dropIfExists('req_requisicaos');
    }
}
