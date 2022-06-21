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
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('fogl_azonosito');
            $table->string('alvazSzam', 17);
            $table->foreign('alvazSzam')->references('alvazSzam')->on('car');
            $table->integer('felhasznalo')->unsigned();
            $table->foreign('felhasznalo')->references('id')->on('users');
            $table->dateTime('elvitel');
            $table->dateTime('visszahozatal');
            $table->dateTime('ervenyessegi_ido');
            $table->integer('kedvezmeny')->unsigned();
            $table->foreign('kedvezmeny')->references('szazalek_id')->on('discount');
            $table->string('allapot', 20);
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
        Schema::dropIfExists('reservation');
    }
};
