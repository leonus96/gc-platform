<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('ingreso', 8, 2)->nullable(false)->change();
            $table->text('description');

            $table->unsignedInteger('id_persona')->nullable();
            $table->unsignedInteger('id_empresa')->nullable();

            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_escuela');

            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_empresa')->references('id')->on('empresas');

            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_escuela')->references('id')->on('escuelas');
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
        Schema::dropIfExists('ventas');
    }
}
