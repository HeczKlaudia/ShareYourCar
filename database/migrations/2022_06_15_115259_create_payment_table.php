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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments("kifizetes_id");
            $table->integer("fogl_azonosito")->unsigned();
            $table->foreign('fogl_azonosito')->references('fogl_azonosito')->on('reservation')->onDelete('cascade');
            $table->integer("sorszam");
            $table->string("fizetes_alapja", 30);
            $table->integer("befizetett_osszeg");
            $table->integer("kifizetendo_osszeg");
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
        Schema::dropIfExists('payment');
    }
};
