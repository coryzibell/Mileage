<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from_location_id')->unsigned();
            $table->foreign('from_location_id')->references('id')->on('locations');
            $table->integer('to_location_id')->unsigned();
            $table->foreign('to_location_id')->references('id')->on('locations');
            $table->float('distance');
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
        Schema::drop('distances');
    }
}
