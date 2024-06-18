<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTypeSeeder extends Seeder
{
    public function run()
    {
        // Associez les types aux Pokémons

        // Pikachu - Electric
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 1, // Pikachu
            'type_id' => 1, // Electric
        ]);

        // Bulbasaur - Grass
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 2, // Bulbasaur
            'type_id' => 4, // Grass
        ]);

        // Charmander - Fire
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 3, // Charmander
            'type_id' => 2, // Fire
        ]);

        // Squirtle - Water
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 4, // Squirtle
            'type_id' => 3, // Water
        ]);

        // Jigglypuff - Fairy
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 5, // Jigglypuff
            'type_id' => 17, // Fairy
        ]);

        // Meowth - Normal
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 6, // Meowth
            'type_id' => 18, // Normal
        ]);

        // Psyduck - Water
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 7, // Psyduck
            'type_id' => 3, // Water
        ]);

        // Machop - Fighting
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 8, // Machop
            'type_id' => 6, // Fighting
        ]);

        // Gastly - Ghost
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 9, // Gastly
            'type_id' => 13, // Ghost
        ]);

        // Geodude - Rock
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 10, // Geodude
            'type_id' => 12, // Rock
        ]);

        // Vulpix - Fire
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 11, // Vulpix
            'type_id' => 2, // Fire
        ]);

        // Eevee - Normal
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 12, // Eevee
            'type_id' => 18, // Normal
        ]);

        // Snorlax - Normal
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 13, // Snorlax
            'type_id' => 18, // Normal
        ]);

        // Dratini - Dragon
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 14, // Dratini
            'type_id' => 15, // Dragon
        ]);

        // Mewtwo - Psychic
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 15, // Mewtwo
            'type_id' => 10, // Psychic
        ]);

        // Chikorita - Grass
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 16, // Chikorita
            'type_id' => 4, // Grass
        ]);

        // Cyndaquil - Fire
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 17, // Cyndaquil
            'type_id' => 2, // Fire
        ]);

        // Totodile - Water
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 18, // Totodile
            'type_id' => 3, // Water
        ]);

        // Togepi - Fairy
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 19, // Togepi
            'type_id' => 17, // Fairy
        ]);

        // Mareep - Electric
        DB::table('pokemon_type')->insert([
            'pokemon_id' => 20, // Mareep
            'type_id' => 1, // Electric
        ]);

    }
}
           
