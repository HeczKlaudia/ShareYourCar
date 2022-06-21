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
        Schema::create('rating', function (Blueprint $table) {
            $table->increments('ertekeles_id');
            $table->integer("fogl_azonosito")->unsigned();
            $table->foreign('fogl_azonosito')->references('fogl_azonosito')->on('reservation');
            $table->integer("felhasznalo")->unsigned();
            $table->foreign('felhasznalo')->references('id')->on('users')->onDelete('cascade');
            $table->string('megjegyzes');
            $table->char('pontszam', 2);
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
        Schema::dropIfExists('rating');
    }
};
