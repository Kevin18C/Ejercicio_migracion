<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->unsignedInteger('id_camion')->primary();
            $table->string('placa',8);
            $table->string('codig_interno',8);
            $table->unsignedInteger('id_transporte');
            $table->string('color',35);
            $table->date('modelo');
            $table->string('capacidad_toneladas',45);
            $table->dateTime('created_at');
            $table->dateTime('update_at');
            $table->unsignedInteger('id_marca');







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camion');
    }
}
