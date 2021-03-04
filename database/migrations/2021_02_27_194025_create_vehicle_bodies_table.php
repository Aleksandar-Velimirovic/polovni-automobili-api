<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->timestamps();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_body_id')->nullable();
            $table->foreign('vehicle_body_id')->references('id')->on('vehicle_bodies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_bodies');
    }
}
