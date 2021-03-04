<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleSafetyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_safety', function (Blueprint $table) {
            $table->id();
            $table->string('safety');
            $table->timestamps();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicle_safety_id')->nullable();
            $table->foreign('vehicle_safety_id')->references('id')->on('vehicle_safety');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_safety');
    }
}
