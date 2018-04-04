<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehiculos', function ($table) {
            $table->unsignedInteger('fv_soat')->change();
            $table->unsignedInteger('fv_leasing')->change();
            $table->unsignedInteger('fv_tar_cir')->change();
            $table->unsignedInteger('fv_rev_tec')->change();

            $table->foreign('fv_soat')->references('id')->on('documentos')->change();
            $table->foreign('fv_leasing')->references('id')->on('documentos')->change();
            $table->foreign('fv_tar_cir')->references('id')->on('documentos')->change();
            $table->foreign('fv_rev_tec')->references('id')->on('documentos')->change();
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
