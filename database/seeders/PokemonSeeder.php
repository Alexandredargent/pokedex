<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Seed the database with sample Pokemon data.
     *
     * This method creates several Pokemon instances in the database using the `Pokemon` model.
     * Each Pokemon is defined with a name, image, HP, weight, and height.
     */
    public function run()
    {
        // Créer des Pokémons factices
        Pokemon::create([
            'name' => 'Pikachu',
            'image' => 'pokemons/Pikachu.png',
            'hp' => 100,
            'weight' => 6.0,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Bulbasaur',
            'image' => 'pokemons/Bulbasaur.png',
            'hp' => 45,
            'weight' => 6.9,
            'height' => 0.7,
        ]);

        Pokemon::create([
            'name' => 'Charmander',
            'image' => 'pokemons/Charmander.png',
            'hp' => 39,
            'weight' => 8.5,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Squirtle',
            'image' => 'pokemons/Squirtle.png',
            'hp' => 44,
            'weight' => 9.0,
            'height' => 0.5,
        ]);

        Pokemon::create([
            'name' => 'Jigglypuff',
            'image' => 'pokemons/Jigglypuff.png',
            'hp' => 115,
            'weight' => 5.5,
            'height' => 0.5,
        ]);

        Pokemon::create([
            'name' => 'Meowth',
            'image' => 'pokemons/Meowth.png',
            'hp' => 40,
            'weight' => 4.2,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Psyduck',
            'image' => 'pokemons/Psyduck.png',
            'hp' => 50,
            'weight' => 19.6,
            'height' => 0.8,
        ]);

        Pokemon::create([
            'name' => 'Machop',
            'image' => 'pokemons/Machop.png',
            'hp' => 70,
            'weight' => 19.5,
            'height' => 0.8,
        ]);

        Pokemon::create([
            'name' => 'Gastly',
            'image' => 'pokemons/Gastly.png',
            'hp' => 30,
            'weight' => 0.1,
            'height' => 1.3,
        ]);

        Pokemon::create([
            'name' => 'Geodude',
            'image' => 'pokemons/Geodude.png',
            'hp' => 40,
            'weight' => 20.0,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Vulpix',
            'image' => 'pokemons/Vulpix.png',
            'hp' => 38,
            'weight' => 9.9,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Eevee',
            'image' => 'pokemons/Eevee.png',
            'hp' => 55,
            'weight' => 6.5,
            'height' => 0.3,
        ]);

        Pokemon::create([
            'name' => 'Snorlax',
            'image' => 'pokemons/Snorlax.png',
            'hp' => 160,
            'weight' => 460.0,
            'height' => 2.1,
        ]);

        Pokemon::create([
            'name' => 'Dratini',
            'image' => 'pokemons/Dratini.png',
            'hp' => 41,
            'weight' => 3.3,
            'height' => 1.8,
        ]);

        Pokemon::create([
            'name' => 'Mewtwo',
            'image' => 'pokemons/Mewtwo.png',
            'hp' => 106,
            'weight' => 122.0,
            'height' => 2.0,
        ]);

        Pokemon::create([
            'name' => 'Chikorita',
            'image' => 'pokemons/Chikorita.png',
            'hp' => 45,
            'weight' => 6.4,
            'height' => 0.9,
        ]);

        Pokemon::create([
            'name' => 'Cyndaquil',
            'image' => 'pokemons/Cyndaquil.png',
            'hp' => 39,
            'weight' => 7.9,
            'height' => 0.5,
        ]);

        Pokemon::create([
            'name' => 'Totodile',
            'image' => 'pokemons/Totodile.png',
            'hp' => 50,
            'weight' => 9.5,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Togepi',
            'image' => 'pokemons/Togepi.png',
            'hp' => 35,
            'weight' => 1.5,
            'height' => 0.3,
        ]);

        Pokemon::create([
            'name' => 'Mareep',
            'image' => 'pokemons/Mareep.png',
            'hp' => 55,
            'weight' => 7.8,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Espeon',
            'image' => 'pokemons/Espeon.png',
            'hp' => 65,
            'weight' => 26.5,
            'height' => 0.9,
        ]);

        Pokemon::create([
            'name' => 'Umbreon',
            'image' => 'pokemons/Umbreon.png',
            'hp' => 95,
            'weight' => 27.0,
            'height' => 1.0,
        ]);

        Pokemon::create([
            'name' => 'Murkrow',
            'image' => 'pokemons/Murkrow.png',
            'hp' => 60,
            'weight' => 2.1,
            'height' => 0.5,
        ]);

        Pokemon::create([
            'name' => 'Wobbuffet',
            'image' => 'pokemons/Wobbuffet.png',
            'hp' => 190,
            'weight' => 28.5,
            'height' => 1.3,
        ]);

        Pokemon::create([
            'name' => 'Steelix',
            'image' => 'pokemons/Steelix.png',
            'hp' => 75,
            'weight' => 400.0,
            'height' => 9.2,
        ]);

        Pokemon::create([
            'name' => 'Scizor',
            'image' => 'pokemons/Scizor.png',
            'hp' => 70,
            'weight' => 118.0,
            'height' => 1.8,
        ]);

        Pokemon::create([
            'name' => 'Houndour',
            'image' => 'pokemons/Houndour.png',
            'hp' => 45,
            'weight' => 10.8,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Kingdra',
            'image' => 'pokemons/Kingdra.png',
            'hp' => 75,
            'weight' => 152.0,
            'height' => 1.8,
        ]);

        Pokemon::create([
            'name' => 'Pichu',
            'image' => 'pokemons/Pichu.png',
            'hp' => 20,
            'weight' => 2.0,
            'height' => 0.3,
        ]);

        Pokemon::create([
            'name' => 'Lugia',
            'image' => 'pokemons/Lugia.png',
            'hp' => 106,
            'weight' => 216.0,
            'height' => 5.2,
        ]);

        Pokemon::create([
            'name' => 'Ho-Oh',
            'image' => 'pokemons/Ho-Oh.png',
            'hp' => 106,
            'weight' => 199.0,
            'height' => 3.8,
        ]);

        Pokemon::create([
            'name' => 'Treecko',
            'image' => 'pokemons/Treecko.png',
            'hp' => 40,
            'weight' => 5.0,
            'height' => 0.5,
        ]);

        Pokemon::create([
            'name' => 'Torchic',
            'image' => 'pokemons/Torchic.png',
            'hp' => 45,
            'weight' => 2.5,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Mudkip',
            'image' => 'pokemons/Mudkip.png',
            'hp' => 50,
            'weight' => 7.6,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Ralts',
            'image' => 'pokemons/Ralts.png',
            'hp' => 28,
            'weight' => 6.6,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Slakoth',
            'image' => 'pokemons/Slakoth.png',
            'hp' => 60,
            'weight' => 24.0,
            'height' => 0.8,
        ]);

        Pokemon::create([
            'name' => 'Makuhita',
            'image' => 'pokemons/Makuhita.png',
            'hp' => 72,
            'weight' => 86.4,
            'height' => 1.0,
        ]);

        Pokemon::create([
            'name' => 'Aron',
            'image' => 'pokemons/Aron.png',
            'hp' => 50,
            'weight' => 60.0,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Meditite',
            'image' => 'pokemons/Meditite.png',
            'hp' => 30,
            'weight' => 11.2,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Roselia',
            'image' => 'pokemons/Roselia.png',
            'hp' => 50,
            'weight' => 2.0,
            'height' => 0.3,
        ]);

        Pokemon::create([
            'name' => 'Gulpin',
            'image' => 'pokemons/Gulpin.png',
            'hp' => 70,
            'weight' => 10.3,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Swablu',
            'image' => 'pokemons/Swablu.png',
            'hp' => 45,
            'weight' => 1.2,
            'height' => 0.4,
        ]);

        Pokemon::create([
            'name' => 'Bagon',
            'image' => 'pokemons/Bagon.png',
            'hp' => 45,
            'weight' => 42.1,
            'height' => 0.6,
        ]);

        Pokemon::create([
            'name' => 'Beldum',
            'image' => 'pokemons/Beldum.png',
            'hp' => 40,
            'weight' => 95.2,
            'height' => 0.6,
        ]);
    }
}
