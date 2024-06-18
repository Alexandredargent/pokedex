<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttackPokemonSeeder extends Seeder
{
    public function run()
    {
        // Pikachu (Pokémon ID: 1)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 1,
            'attack_id' => 1, // Thunderbolt
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 1,
            'attack_id' => 2, // Thunder Wave
        ]);

        // Bulbasaur (Pokémon ID: 2)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 2,
            'attack_id' => 12, // Seed Bomb
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 2,
            'attack_id' => 11, // Razor Leaf
        ]);

        // Charmander (Pokémon ID: 3)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 3,
            'attack_id' => 6, // fire punch
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 3,
            'attack_id' => 4, // Flamethrower
        ]);

        // Squirtle (Pokémon ID: 4)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 4,
            'attack_id' => 7, // Water Gun
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 4,
            'attack_id' => 3, // surf
        ]);

        // Jigglypuff (Pokémon ID: 5)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 5,
            'attack_id' => 52, // Pound
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 5,
            'attack_id' => 53, // Double Slap
        ]);

        // Meowth (Pokémon ID: 6)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 6,
            'attack_id' => 54, // Scratch
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 6,
            'attack_id' => 53, // double slap
        ]);

        // Psyduck (Pokémon ID: 7)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 7,
            'attack_id' => 7, // Water Gun
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 7,
            'attack_id' => 10, 
        ]);

        // Machop (Pokémon ID: 8)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 8,
            'attack_id' => 18, 
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 8,
            'attack_id' => 16, 
        ]);

        // Gastly (Pokémon ID: 9)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 9,
            'attack_id' => 37, // Lick
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 9,
            'attack_id' => 43, // Night Shade
        ]);

        // Geodude (Pokémon ID: 10)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 10,
            'attack_id' => 44, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 10,
            'attack_id' => 45, // Rock Throw
        ]);

        // Vulpix (Pokémon ID: 11)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 11,
            'attack_id' => 46, // Ember
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 11,
            'attack_id' => 47, // Quick Attack
        ]);

        // Eevee (Pokémon ID: 12)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 12,
            'attack_id' => 48, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 12,
            'attack_id' => 49, // Swift
        ]);

        // Snorlax (Pokémon ID: 13)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 13,
            'attack_id' => 50, // Rest
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 13,
            'attack_id' => 51, // Body Slam
        ]);

        // Dratini (Pokémon ID: 14)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 14,
            'attack_id' => 52, // Wrap
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 14,
            'attack_id' => 53, // Leer
        ]);

        // Mewtwo (Pokémon ID: 15)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 15,
            'attack_id' => 54, // Psychic
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 15,
            'attack_id' => 50, // Swift
        ]);

        // Chikorita (Pokémon ID: 16)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 16,
            'attack_id' => 42, // Razor Leaf
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 16,
            'attack_id' => 46, // Tackle
        ]);

        // Cyndaquil (Pokémon ID: 17)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 17,
            'attack_id' => 33, // Ember
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 17,
            'attack_id' => 25, // Tackle
        ]);

        // Totodile (Pokémon ID: 18)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 18,
            'attack_id' => 31, // Water Gun
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 18,
            'attack_id' => 14, // Bite
        ]);

        // Togepi (Pokémon ID: 19)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 19,
            'attack_id' => 6, // Charm
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 19,
            'attack_id' => 9, // Metronome
        ]);

        // Mareep (Pokémon ID: 20)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 20,
            'attack_id' => 34, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 20,
            'attack_id' => 34, // Thunder Wave
        ]);

        // Espeon (Pokémon ID: 21)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 21,
            'attack_id' => 25, // Confusion
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 21,
            'attack_id' => 5, // Swift
        ]);

        // Umbreon (Pokémon ID: 22)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 22,
            'attack_id' => 32, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 22,
            'attack_id' => 44, // Faint Attack
        ]);

        // Murkrow (Pokémon ID: 23)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 23,
            'attack_id' => 22, // Peck
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 23,
            'attack_id' => 23, // Astonish
        ]);

        // Wobbuffet (Pokémon ID: 24)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 24,
            'attack_id' => 21, // Counter
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 24,
            'attack_id' => 20, // Mirror Coat
        ]);

        // Steelix (Pokémon ID: 25)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 25,
            'attack_id' => 42, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 25,
            'attack_id' => 42, // Iron Tail
        ]);

        // Scizor (Pokémon ID: 26)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 26,
            'attack_id' => 54, // Bullet Punch
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 26,
            'attack_id' => 32, // U-turn
        ]);

        // Houndour (Pokémon ID: 27)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 27,
            'attack_id' => 33, // Ember
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 27,
            'attack_id' => 22, // Bite
        ]);

        // Kingdra (Pokémon ID: 28)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 28,
            'attack_id' => 28, // Water Gun
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 28,
            'attack_id' => 29, // Dragon Pulse
        ]);

        // Pichu (Pokémon ID: 29)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 29,
            'attack_id' => 30, // Thunder Shock
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 29,
            'attack_id' => 39, // Charm
        ]);

        // Lugia (Pokémon ID: 30)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 30,
            'attack_id' => 27, // Aeroblast
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 30,
            'attack_id' => 38, // Hydro Pump
        ]);

        // Ho-Oh (Pokémon ID: 31)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 31,
            'attack_id' => 12, // Sacred Fire
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 31,
            'attack_id' => 11, // Brave Bird
        ]);

        // Treecko (Pokémon ID: 32)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 32,
            'attack_id' => 18, // Pound
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 32,
            'attack_id' => 17, // Quick Attack
        ]);

        // Torchic (Pokémon ID: 33)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 33,
            'attack_id' => 10, // Ember
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 33,
            'attack_id' => 16, // Peck
        ]);

        // Mudkip (Pokémon ID: 34)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 34,
            'attack_id' => 14, // Water Gun
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 34,
            'attack_id' => 13, // Mud-Slap
        ]);

        // Ralts (Pokémon ID: 35)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 35,
            'attack_id' => 47, // Growl
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 35,
            'attack_id' => 4, // Confusion
        ]);

        // Slakoth (Pokémon ID: 36)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 36,
            'attack_id' => 45, // Scratch
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 36,
            'attack_id' => 2, // Yawn
        ]);

        // Makuhita (Pokémon ID: 37)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 37,
            'attack_id' => 3, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 37,
            'attack_id' => 9, // Arm Thrust
        ]);

        // Aron (Pokémon ID: 38)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 38,
            'attack_id' => 10, // Tackle
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 38,
            'attack_id' => 4, // Headbutt
        ]);

        // Meditite (Pokémon ID: 39)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 39,
            'attack_id' => 3, // Confusion
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 39,
            'attack_id' => 1, // Meditate
        ]);

        // Roselia (Pokémon ID: 40)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 40,
            'attack_id' => 32, // Absorb
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 40,
            'attack_id' => 53, // Poison Sting
        ]);

        // Gulpin (Pokémon ID: 41)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 41,
            'attack_id' => 33, // Pound
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 41,
            'attack_id' => 12, // Sludge Bomb
        ]);

        // Swablu (Pokémon ID: 42)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 42,
            'attack_id' => 42, // Peck
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 42,
            'attack_id' => 12, // Astonish
        ]);

        // Bagon (Pokémon ID: 43)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 43,
            'attack_id' => 19, // Rage
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 43,
            'attack_id' => 20, // Bite
        ]);

        // Beldum (Pokémon ID: 44)
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 44,
            'attack_id' => 1, // Take Down
        ]);
        DB::table('attack_pokemon')->insert([
            'pokemon_id' => 44,
            'attack_id' => 14, // Iron Head
        ]);

        // Add more associations as needed...

    }
}
