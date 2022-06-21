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
        Schema::create('model_property', function (Blueprint $table) {
            $table->increments('modell_tul_id');
            $table->integer('modell_id')->unsigned();
            $table->string('tulajdonsag', 50)->nullable();
            $table->foreign('modell_id')->references('modell_id')->on('model');
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
        Schema::dropIfExists('model_property');
    }
};
