<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetoAflorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto_afloras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sigla')->nullable();
            $table->integer('centro_custo')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_conclusao')->nullable();
            $table->integer('sureg_id')->unsigned()->nullable();
            //$table->foreign('sureg_id')->references('id')->on('suregs')->onDelete('cascade');
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
        Schema::dropIfExists('projeto_afloras');
    }
}
