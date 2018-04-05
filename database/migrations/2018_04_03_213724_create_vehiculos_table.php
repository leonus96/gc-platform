<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa', 6)->nullable(false)->change();
            $table->unsignedInteger('fv_soat')->nullable();
            $table->unsignedInteger('fv_leasing')->nullable();
            $table->unsignedInteger('fv_tar_cir')->nullable();
            $table->unsignedInteger('fv_rev_tec')->nullable();

            $table->unsignedInteger('id_persona')->nullable();
            $table->unsignedInteger('id_empresa')->nullable();


            $table->foreign('fv_soat')->references('id')->on('documentos');
            $table->foreign('fv_leasing')->references('id')->on('documentos');
            $table->foreign('fv_tar_cir')->references('id')->on('documentos');
            $table->foreign('fv_rev_tec')->references('id')->on('documentos');

            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('vehiculos');
    }
}
