<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo-evento')->unsigned();
            $table->foreign('tipo-evento')->references('id')->on('tipo-evt');
            $table->string('nome', 50);
            $table->string("local", 70);
            $table->dateTime('dia-hora');
            $table->integer('limite');
            $table->decimal('valor',5,2);
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
        Schema::drop('eventos');
    }
}
