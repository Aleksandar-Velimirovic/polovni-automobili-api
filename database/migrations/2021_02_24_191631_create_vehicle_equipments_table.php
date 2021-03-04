<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_equipments', function (Blueprint $table) {
            $table->id();
            $table->string('equipment');
            $table->timestamps();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_equipment_id')->nullable();
            $table->foreign('vehicle_equipment_id')->references('id')->on('vehicle_equipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_equipments');
    }
}
