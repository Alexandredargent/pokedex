<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttackPokemonTable extends Migration
{
    public function up()
    {
        Schema::create('attack_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->constrained('pokemons')->onDelete('cascade');
            $table->foreignId('attack_id')->constrained('attacks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attack_pokemon');
    }
}

