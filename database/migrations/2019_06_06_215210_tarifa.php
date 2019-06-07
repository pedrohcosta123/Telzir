<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tarifa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('origem_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->decimal('preco',3,2);
            $table->timestamp('created_at');
        });

        Schema::table('tarifa',function(Blueprint $table){

            $table->foreign('destino_id')->references('id')->on('destino');
            $table->foreign('origem_id')->references('id')->on('origem');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifa');
    }
}
