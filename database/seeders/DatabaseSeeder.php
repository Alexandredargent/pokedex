<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Call the seeders for each model
        $this->call(UserSeeder::class); // Register the user seeder
        $this->call(PokemonSeeder::class); // Register the Pokemon seeder
        $this->call(TypeSeeder::class); // Register the Type seeder
        $this->call(AttackSeeder::class); // Register the Attack seeder
        $this->call(PokemonTypeSeeder::class); // Register the Pokemontype seeder
        $this->call(AttackPokemonSeeder::class); // Register the attackPokemon seeder
    }
}
