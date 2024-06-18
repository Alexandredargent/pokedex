<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('hp');
            $table->float('weight');
            $table->float('height');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
