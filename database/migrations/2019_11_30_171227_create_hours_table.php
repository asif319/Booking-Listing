<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('listing_id')->nullable();
            $table->string('monday_op')->nullable();
            $table->string('monday_cl')->nullable();
            $table->string('tuesday_op')->nullable();
            $table->string('tuesday_cl')->nullable();
            $table->string('wednesday_op')->nullable();
            $table->string('wednesday_cl')->nullable();
            $table->string('thursday_op')->nullable();
            $table->string('thursday_cl')->nullable();
            $table->string('friday_op')->nullable();
            $table->string('friday_cl')->nullable();
            $table->string('saturday_op')->nullable();
            $table->string('saturday_cl')->nullable();
            $table->string('sunday_op')->nullable();
            $table->string('sunday_cl')->nullable();
            $table->timestamps();

            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours');
    }
}
