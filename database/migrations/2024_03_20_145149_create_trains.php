<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("ceparture_from");
            $table->string("arrival_in");
            $table->dateTime("time_of_departure");
            $table->dateTime("time_of_arrival");
            $table->integer("train_Code");
            $table->tinyInteger("coaches");
            $table->boolean("in_time");
            $table->boolean("canceled");
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
        Schema::dropIfExists('trains');
    }
};
