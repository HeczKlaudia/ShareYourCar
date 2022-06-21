<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_extra', function (Blueprint $table) {
            $table->increments('auto_extra_id');
            $table->string('alvazSzam', 17);
            $table->foreign('alvazSzam')->references('alvazSzam')->on('car');
            $table->string('extra_megnevezese', 50);
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
        Schema::dropIfExists('car_extra');
    }
};
