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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->dateTime('fecha');
            $table->timestamps();
            $table->string('lugar');
            
            $table->text('comentarios')->nullable();

            $table->foreignId('id_equipo_A')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_equipo_B')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
