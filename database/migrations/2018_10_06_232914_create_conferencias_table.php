<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable(false)->default('');
            $table->string('apellidos')->nullable(false)->default('');
            $table->string('correo')->nullable(false)->default('');
            $table->string('celular')->nullable(false)->default('');
            $table->string('facebook')->nullable(true)->default('-');
            $table->string('pais')->nullable(true)->default('-');
            $table->string('iglesia')->nullable(true)->default('-');
            $table->string('roliglesia')->nullable(true)->default('-');
            $table->string('noticias')->nullable(true)->default('-');
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
        Schema::dropIfExists('conferencias');
    }
}
