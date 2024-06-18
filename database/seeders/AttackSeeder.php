<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attack;

class AttackSeeder extends Seeder
{
    public function run()
    {
        // Electric Type Attacks
        // ID 1
        Attack::create([
            'name' => 'Thunderbolt',
            'image' => 'electric.png',
            'damage' => 90,
            'description' => 'A strong electric blast is loosed at the target. This may also leave the target with paralysis.',
            'type_id' => 1,
        ]);

        // ID 2
        Attack::create([
            'name' => 'Thunder Wave',
            'image' => 'electric.png',
            'damage' => 0,
            'description' => 'A weak electric charge is launched at the target. It causes paralysis if it hits.',
            'type_id' => 1,
        ]);

        // ID 3
        Attack::create([
            'name' => 'Thunder Punch',
            'image' => 'electric.png',
            'damage' => 75,
            'description' => 'The target is punched with an electrified fist. This may also leave the target with paralysis.',
            'type_id' => 1,
        ]);

        // Fire Type Attacks
        // ID 4
        Attack::create([
            'name' => 'Flamethrower',
            'image' => 'fire.png',
            'damage' => 90,
            'description' => 'The target is scorched with an intense blast of fire. This may also leave the target with a burn.',
            'type_id' => 2,
        ]);

        // ID 5
        Attack::create([
            'name' => 'Fire Blast',
            'image' => 'fire.png',
            'damage' => 110,
            'description' => 'The target is attacked with an intense blast of all-consuming fire. This may also leave the target with a burn.',
            'type_id' => 2,
        ]);

        // ID 6
        Attack::create([
            'name' => 'Fire Punch',
            'image' => 'fire.png',
            'damage' => 75,
            'description' => 'The target is punched with a fiery fist. This may also leave the target with a burn.',
            'type_id' => 2,
        ]);

        // Water Type Attacks
        // ID 7
        Attack::create([
            'name' => 'Water Gun',
            'image' => 'water.png',
            'damage' => 40,
            'description' => 'The target is blasted with a forceful shot of water.',
            'type_id' => 3,
        ]);

        // ID 8
        Attack::create([
            'name' => 'Surf',
            'image' => 'water.png',
            'damage' => 90,
            'description' => 'The user attacks everything around it by swamping its surroundings with a giant wave.',
            'type_id' => 3,
        ]);

        // ID 9
        Attack::create([
            'name' => 'Hydro Pump',
            'image' => 'water.png',
            'damage' => 110,
            'description' => 'The target is blasted by a huge volume of water launched under great pressure.',
            'type_id' => 3,
        ]);

        // Grass Type Attacks
        // ID 10
        Attack::create([
            'name' => 'Solar Beam',
            'image' => 'grass.png',
            'damage' => 120,
            'description' => 'A two-turn attack. The user gathers light, then blasts a bundled beam on the next turn.',
            'type_id' => 4,
        ]);

        // ID 11
        Attack::create([
            'name' => 'Razor Leaf',
            'image' => 'grass.png',
            'damage' => 55,
            'description' => 'Sharp-edged leaves are launched to slash at the opposing Pokémon. Critical hits land more easily.',
            'type_id' => 4,
        ]);

        // ID 12
        Attack::create([
            'name' => 'Seed Bomb',
            'image' => 'grass.png',
            'damage' => 80,
            'description' => 'The user slams a barrage of hard-shelled seeds down on the target from above.',
            'type_id' => 4,
        ]);

        // Ice Type Attacks
        // ID 13
        Attack::create([
            'name' => 'Ice Beam',
            'image' => 'ice.png',
            'damage' => 90,
            'description' => 'The target is struck with an icy-cold beam of energy. This may also leave the target frozen.',
            'type_id' => 5,
        ]);

        // ID 14
        Attack::create([
            'name' => 'Blizzard',
            'image' => 'ice.png',
            'damage' => 110,
            'description' => 'A howling blizzard is summoned to strike opposing Pokémon. This may also leave the opposing Pokémon frozen.',
            'type_id' => 5,
        ]);

        // ID 15
        Attack::create([
            'name' => 'Ice Punch',
            'image' => 'ice.png',
            'damage' => 75,
            'description' => 'The target is punched with an icy fist. This may also leave the target frozen.',
            'type_id' => 5,
        ]);

        // Fighting Type Attacks
        // ID 16
        Attack::create([
            'name' => 'Close Combat',
            'image' => 'fighting.png',
            'damage' => 120,
            'description' => 'The user fights the target up close without guarding itself. This also lowers the user\'s Defense and Special Defense stats.',
            'type_id' => 6,
        ]);

        // ID 17
        Attack::create([
            'name' => 'Dynamic Punch',
            'image' => 'fighting.png',
            'damage' => 100,
            'description' => 'The user punches the target with full, concentrated power. This confuses the target if it hits.',
            'type_id' => 6,
        ]);

        // ID 18
        Attack::create([
            'name' => 'Mach Punch',
            'image' => 'fighting.png',
            'damage' => 40,
            'description' => 'The user throws a punch at blinding speed. This move always goes first.',
            'type_id' => 6,
        ]);

        // Poison Type Attacks
        // ID 19
        Attack::create([
            'name' => 'Sludge Bomb',
            'image' => 'poison.png',
            'damage' => 90,
            'description' => 'Unsanitary sludge is hurled at the target. This may also poison the target.',
            'type_id' => 7,
        ]);

        // ID 20
        Attack::create([
            'name' => 'Toxic',
            'image' => 'poison.png',
            'damage' => 0,
            'description' => 'A move that leaves the target badly poisoned. Its poison damage worsens every turn.',
            'type_id' => 7,
        ]);

        // ID 21
        Attack::create([
            'name' => 'Venoshock',
            'image' => 'poison.png',
            'damage' => 65,
            'description' => 'The user drenches the target in a special poisonous liquid. This move\'s power is doubled if the target is poisoned.',
            'type_id' => 7,
        ]);

        // Ground Type Attacks
        // ID 22
        Attack::create([
            'name' => 'Earthquake',
            'image' => 'ground.png',
            'damage' => 100,
            'description' => 'The user sets off an earthquake that strikes every Pokémon around it.',
            'type_id' => 8,
        ]);

        // ID 23
        Attack::create([
            'name' => 'Dig',
            'image' => 'ground.png',
            'damage' => 80,
            'description' => 'The user burrows, then attacks on the next turn.',
            'type_id' => 8,
        ]);

        // ID 24
        Attack::create([
            'name' => 'Magnitude',
            'image' => 'ground.png',
            'damage' => 0,
            'description' => 'The user looses a ground-shaking quake affecting everyone around the user. Its power varies.',
            'type_id' => 8,
        ]);

        // Flying Type Attacks
        // ID 25
        Attack::create([
            'name' => 'Aerial Ace',
            'image' => 'flying.png',
            'damage' => 60,
            'description' => 'The user confounds the target with speed, then slashes. This attack never misses.',
            'type_id' => 9,
        ]);

        // ID 26
        Attack::create([
            'name' => 'Hurricane',
            'image' => 'flying.png',
            'damage' => 110,
            'description' => 'The user attacks by wrapping its opponent in a fierce wind that flies up into the sky. This may also confuse the target.',
            'type_id' => 9,
        ]);

        // ID 27
        Attack::create([
            'name' => 'Brave Bird',
            'image' => 'flying.png',
            'damage' => 120,
            'description' => 'The user tucks in its wings and charges from a low altitude. This also damages the user quite a lot.',
            'type_id' => 9,
        ]);

        // Psychic Type Attacks
        // ID 28
        Attack::create([
            'name' => 'Psychic',
            'image' => 'psychic.png',
            'damage' => 90,
            'description' => 'The target is hit by a strong telekinetic force. This may also lower the target\'s Special Defense stat.',
            'type_id' => 10,
        ]);

        // ID 29
        Attack::create([
            'name' => 'Psybeam',
            'image' => 'psychic.png',
            'damage' => 65,
            'description' => 'The target is attacked with a peculiar ray. This may also leave the target confused.',
            'type_id' => 10,
        ]);

        // ID 30
        Attack::create([
            'name' => 'Confusion',
            'image' => 'psychic.png',
            'damage' => 50,
            'description' => 'The target is hit by a weak telekinetic force. This may also leave the target confused.',
            'type_id' => 10,
        ]);

        // Bug Type Attacks
        // ID 31
        Attack::create([
            'name' => 'Bug Buzz',
            'image' => 'bug.png',
            'damage' => 90,
            'description' => 'The user generates a damaging sound wave by vibration. This may also lower the target\'s Special Defense stat.',
            'type_id' => 11,
        ]);

        // ID 32
        Attack::create([
            'name' => 'X-Scissor',
            'image' => 'bug.png',
            'damage' => 80,
            'description' => 'The user slashes at the target by crossing its scythes or claws as if they were a pair of scissors.',
            'type_id' => 11,
        ]);

        // ID 33
        Attack::create([
            'name' => 'Leech Life',
            'image' => 'bug.png',
            'damage' => 80,
            'description' => 'The user drains the target\'s blood. The user\'s HP is restored by half the damage taken by the target.',
            'type_id' => 11,
        ]);

        // Rock Type Attacks
        // ID 34
        Attack::create([
            'name' => 'Rock Slide',
            'image' => 'rock.png',
            'damage' => 75,
            'description' => 'Large boulders are hurled at opposing Pokémon to inflict damage. This may also make the opposing Pokémon flinch.',
            'type_id' => 12,
        ]);

        // ID 35
        Attack::create([
            'name' => 'Stone Edge',
            'image' => 'rock.png',
            'damage' => 100,
            'description' => 'The user stabs the foe with sharpened stones from below. It has a high critical-hit ratio.',
            'type_id' => 12,
        ]);

        // ID 36
        Attack::create([
            'name' => 'Rock Throw',
            'image' => 'rock.png',
            'damage' => 50,
            'description' => 'The user picks up and throws a small rock at the target to attack.',
            'type_id' => 12,
        ]);

        // Ghost Type Attacks
        // ID 37
        Attack::create([
            'name' => 'Shadow Ball',
            'image' => 'ghost.png',
            'damage' => 80,
            'description' => 'The user hurls a shadowy blob at the target. This may also lower the target\'s Special Defense stat.',
            'type_id' => 13,
        ]);

        // ID 38
        Attack::create([
            'name' => 'Shadow Punch',
            'image' => 'ghost.png',
            'damage' => 60,
            'description' => 'The user throws a punch from the shadows. This attack never misses.',
            'type_id' => 13,
        ]);

        // ID 39
        Attack::create([
            'name' => 'Hex',
            'image' => 'ghost.png',
            'damage' => 65,
            'description' => 'This relentless attack does massive damage to a target affected by status conditions.',
            'type_id' => 13,
        ]);

        // Dragon Type Attacks
        // ID 40
        Attack::create([
            'name' => 'Dragon Pulse',
            'image' => 'dragon.png',
            'damage' => 85,
            'description' => 'The target is attacked with a shock wave generated by the user\'s gaping mouth.',
            'type_id' => 14,
        ]);

        // ID 41
        Attack::create([
            'name' => 'Dragon Claw',
            'image' => 'dragon.png',
            'damage' => 80,
            'description' => 'The user slashes the target with huge, sharp claws.',
            'type_id' => 14,
        ]);

        // ID 42
        Attack::create([
            'name' => 'Outrage',
            'image' => 'dragon.png',
            'damage' => 120,
            'description' => 'The user rampages and attacks for two to three turns. The user becomes confused.',
            'type_id' => 14,
        ]);

        // Dark Type Attacks
        // ID 43
        Attack::create([
            'name' => 'Dark Pulse',
            'image' => 'dark.png',
            'damage' => 80,
            'description' => 'The user releases a horrible aura imbued with dark thoughts. This may also make the target flinch.',
            'type_id' => 15,
        ]);

        // ID 44
        Attack::create([
            'name' => 'Night Slash',
            'image' => 'dark.png',
            'damage' => 70,
            'description' => 'The user slashes the target the instant an opportunity arises. Critical hits land more easily.',
            'type_id' => 15,
        ]);

        // ID 45
        Attack::create([
            'name' => 'Foul Play',
            'image' => 'dark.png',
            'damage' => 95,
            'description' => 'The user turns the target\'s power against it. The higher the target\'s Attack stat, the greater the move\'s power.',
            'type_id' => 15,
        ]);

        // Steel Type Attacks
        // ID 46
        Attack::create([
            'name' => 'Iron Head',
            'image' => 'steel.png',
            'damage' => 80,
            'description' => 'The user slams the target with its steel-hard head. This may also make the target flinch.',
            'type_id' => 16,
        ]);

        // ID 47
        Attack::create([
            'name' => 'Meteor Mash',
            'image' => 'steel.png',
            'damage' => 90,
            'description' => 'The target is hit with a hard punch fired like a meteor. This may also raise the user\'s Attack stat.',
            'type_id' => 16,
        ]);

        // ID 48
        Attack::create([
            'name' => 'Steel Wing',
            'image' => 'steel.png',
            'damage' => 70,
            'description' => 'The target is hit with wings of steel. This may also raise the user\'s Defense stat.',
            'type_id' => 16,
        ]);

        // Fairy Type Attacks
        // ID 49
        Attack::create([
            'name' => 'Moonblast',
            'image' => 'fairy.png',
            'damage' => 95,
            'description' => 'Borrowing the power of the moon, the user attacks the target. This may also lower the target\'s Attack stat.',
            'type_id' => 17,
        ]);

        // ID 50
        Attack::create([
            'name' => 'Dazzling Gleam',
            'image' => 'fairy.png',
            'damage' => 80,
            'description' => 'The user damages opposing Pokémon by emitting a powerful flash.',
            'type_id' => 17,
        ]);

        // ID 51
        Attack::create([
            'name' => 'Play Rough',
            'image' => 'fairy.png',
            'damage' => 90,
            'description' => 'The user plays rough with the target and attacks it. This may also lower the target\'s Attack stat.',
            'type_id' => 17,
        ]);

        // Normal Type Attack
        // ID 52
        Attack::create([
            'name' => 'pound',
            'image' => 'normal.png',
            'damage' => 40,
            'description' => 'The target is physically pounded with a long tail, a foreleg, or the like. ',
            'type_id' => 18,
        ]);
        // ID 53
        Attack::create([
            'name' => 'double slap',
            'image' => 'normal.png',
            'damage' => 15,
            'description' => 'This move cant be used. Its recommended that this move is forgotten. Once forgotten, this move cant be remembered.  ',
            'type_id' => 18,
        ]);
        // ID 54
        Attack::create([
            'name' => 'scratch',
            'image' => 'normal.png',
            'damage' => 40,
            'description' => 'Hard, pointed, sharp claws rake the target to inflict damage.  ',
            'type_id' => 18,
        ]);


        // Add more attacks if needed...
    }
}
