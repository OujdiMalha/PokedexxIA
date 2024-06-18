<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('pointsDevie');
            $table->float('poids');
            $table->float('taille');
            $table->unsignedBigInteger('user_id')->nullable(); // Rendre la colonne nullable
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}

