<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('from');
            $table->string('to');
            $table->date('start_date');
            $table->date('return_date');
            $table->foreignId('plan_id')->references('id')->on('plans');
            $table->foreignId('pilot_id')->references('id')->on('pilots');
            $table->integer('price');


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
        Schema::dropIfExists('flights');
    }
}
