<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorcyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();

            //Campos
            $table->string('nameMotorcycle');
            $table->BigInteger('cc');
            $table->BigInteger('model');
            $table->date('soatDate');
            $table->boolean('taxes');
            $table->date('taxesDate');
            $table->date('mechanicsDate');
            $table->date('tiresDate');
            $table->date('brakesDate');
            $table->date('oilsDate');

            // Llave foranea con usuario
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Llave foranea con marcas
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');

            // Llave foranea con soat
            $table->unsignedBigInteger('soat_id');
            $table->foreign('soat_id')->references('id')->on('soats');

            // Llave foranea con tecnomecanica
            $table->unsignedBigInteger('mechanic_id');
            $table->foreign('mechanic_id')->references('id')->on('mechanics');

            // Llave foranea con llantas
            $table->unsignedBigInteger('tire_id');
            $table->foreign('tire_id')->references('id')->on('tires');

            // Llave foranea con frenos
            $table->unsignedBigInteger('brake_id');
            $table->foreign('brake_id')->references('id')->on('brakes');

            // Llave foranea con aceites
            $table->unsignedBigInteger('oil_id');
            $table->foreign('oil_id')->references('id')->on('oils');

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
        Schema::dropIfExists('motorcycles');
    }
}
