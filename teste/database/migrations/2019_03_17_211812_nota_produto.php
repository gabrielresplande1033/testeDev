<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_produto', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_nota')->unsigned();
            $table->foreign('id_nota')->references('id')->on('nota')->onDelete('cascade');

            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto')->onDelete('cascade');

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
