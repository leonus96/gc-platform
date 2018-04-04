<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni', 10);
            $table->string('nombres')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->date('f_nac')->nullable(false);
            $table->date('fv_brevete')->nullable(false);
            $table->string('cat_brevete')->nullable(false);
            $table->string('region')->nullable(false);
            $table->string('ciudad')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('telefono', 15);
            $table->string('celular', 15)->nullable(false);
            $table->unsignedInteger('id_empresa')->nullable();
            $table->string('ocupacion');
            $table->string('como_llego');
            $table->text('description');

            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->unique('dni');
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
        Schema::dropIfExists('personas');
    }
}
