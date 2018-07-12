<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqAmostrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_amostras', function (Blueprint $table) {
            $table->string('numero', 150);
            $table->string('numero_campo',150);
            $table->date('data_coleta');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('numero_laboratorio',150);
            $table->string('numero_lote',150);
            
            $table->integer('fk_litotipo')->unsigned();
            $table->foreign('fk_litotipo')->references('id')->on('req_litotipos');
            
            $table->increments('id');
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
        Schema::dropIfExists('req_amostras');
    }
}
