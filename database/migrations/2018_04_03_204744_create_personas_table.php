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
            $table->unsignedInteger('fv_brevete');
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
            $table->text('descripcion');
            $table->unsignedInteger('id_referido')->nullable();


            $table->foreign('id_empresa')->references('id')->on('empresas');
            $table->foreign('fv_brevete')->references('id')->on('documentos');
            $table->foreign('id_referido')->references('id')->on('personas');
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
