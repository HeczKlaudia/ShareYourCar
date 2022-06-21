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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vezeteknev', 30);
            $table->string('keresztnev', 30);
            $table->string('username', 30);
            $table->string('profilkep')->nullable();
            $table->date('szul_ido');
            
            $table->string('ir_szam', 10);
            $table->string('megye', 30);
            $table->string('varos', 40);
            $table->string('utca', 30);
            $table->char('hazszam', 10);
            $table->char('tel_szam', 20);

            $table->integer('telephely')->unsigned()->nullable();
            $table->foreign('telephely')->references('telephely_id')->on('address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
