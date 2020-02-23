<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {

            $table->increments('id');
            $table->string('trip_name');
            $table->string('start_city');
            $table->string('end_city');
            $table->INTEGER('days');
            $table->INTEGER('day_cost');
            $table->INTEGER('hotel_per_day_cost');
            $table->INTEGER('air_tickets_cost');
            $table->INTEGER('other_transport_cost');
            $table->INTEGER('ticket_to_city_cost');
            $table->INTEGER('ticket_from_city_cost');
            $table->string('autor');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
