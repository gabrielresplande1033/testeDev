<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->increments('id');

            $table->String('numero_nota');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

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
        //
    }
}
