<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attaques', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->integer('degats');
            $table->text('description');
            $table->unsignedBigInteger('pokemon_id');
            $table->foreignId('type_id')->constrained();
            $table->timestamps();

            $table->foreign('pokemon_id')->references('id')->on('pokemon')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attaques');
    }
};
