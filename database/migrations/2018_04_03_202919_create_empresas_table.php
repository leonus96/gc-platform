<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruc', 11);
            $table->string('razon_social')->nullable(false)->change();
            $table->string('direccion')->nullable(false)->change();
            $table->string('region')->nullable(false)->change();
            $table->string('ciudad')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('telefono');
            $table->string('celular')->nullable(false)->change();
            $table->string('rubro');
            $table->text('descripcion');

            $table->unique('ruc');
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
        Schema::dropIfExists('empresas');
    }
}
