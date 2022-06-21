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
        Schema::create('car', function (Blueprint $table) {
            $table->string('alvazSzam')->primary();
            $table->integer('modell')->unsigned();
            $table->integer('telephely')->unsigned();
            $table->foreign('telephely')->references('telephely_id')->on('address');
            $table->foreign('modell')->references('modell_id')->on('model');
            $table->integer('napiAr');
            $table->string('szin', 20);
            $table->char('forgalmiSzam', 30);
            $table->boolean('statusz');
            $table->char('rendszam', 6);
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
        Schema::dropIfExists('car');
    }
};
