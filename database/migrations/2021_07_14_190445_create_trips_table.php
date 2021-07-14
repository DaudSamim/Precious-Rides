<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile');
            $table->string('from_location');
            $table->string('to_location');
            $table->string('pickup_time');
            $table->string('dropoff_time');
            $table->string('status');
            $table->double('price');
            $table->double('time_taken_minutes');
            $table->double('distance_km');
            $table->double('tip');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');

            $table->unsignedBigInteger('ride_request_id');
            $table->foreign('ride_request_id')->references('id')->on('ride_request');

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
        Schema::dropIfExists('trips');
    }
}
