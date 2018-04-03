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
            $table->string('nombres')->nullable(false)->change();
            $table->string('apellidos')->nullable(false)->change();
            $table->date('f_nac')->nullable(false)->change();
            $table->date('fv_brevete')->nullable(false)->change();
            $table->date('cat_brevete')->nullable(false)->change();
            $table->string('region')->nullable(false)->change();
            $table->string('ciudad')->nullable(false)->change();
            $table->string('direccion')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('telefono', 15);
            $table->string('celular', 15)->nullable(false)->change();
            $table->unsignedInteger('id_empresa');
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
