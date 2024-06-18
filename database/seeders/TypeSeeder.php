<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        // Créer des types factices
        Type::create([
            'name' => 'Electric',
            'image' => 'types/electric.png',
            'color' => '#FFD700',
        ]);

        Type::create([
            'name' => 'Fire',
            'image' => 'types/fire.png',
            'color' => '#FF4500',
        ]);

        Type::create([
            'name' => 'Water',
            'image' => 'types/water.png',
            'color' => '#1E90FF',
        ]);

        Type::create([
            'name' => 'Grass',
            'image' => 'types/grass.png',
            'color' => '#32CD32',
        ]);

        Type::create([
            'name' => 'Ice',
            'image' => 'types/ice.png',
            'color' => '#00FFFF',
        ]);

        Type::create([
            'name' => 'Fighting',
            'image' => 'types/fighting.png',
            'color' => '#A52A2A',
        ]);

        Type::create([
            'name' => 'Poison',
            'image' => 'types/poison.png',
            'color' => '#8A2BE2',
        ]);

        Type::create([
            'name' => 'Ground',
            'image' => 'types/ground.png',
            'color' => '#D2B48C',
        ]);

        Type::create([
            'name' => 'Flying',
            'image' => 'types/flying.png',
            'color' => '#87CEEB',
        ]);

        Type::create([
            'name' => 'Psychic',
            'image' => 'types/psychic.png',
            'color' => '#FF1493',
        ]);

        Type::create([
            'name' => 'Bug',
            'image' => 'types/bug.png',
            'color' => '#9ACD32',
        ]);

        Type::create([
            'name' => 'Rock',
            'image' => 'types/rock.png',
            'color' => '#B8860B',
        ]);

        Type::create([
            'name' => 'Ghost',
            'image' => 'types/ghost.png',
            'color' => '#4B0082',
        ]);

        Type::create([
            'name' => 'Dragon',
            'image' => 'types/dragon.png',
            'color' => '#8B0000',
        ]);

        Type::create([
            'name' => 'Dark',
            'image' => 'types/dark.png',
            'color' => '#000000',
        ]);

        Type::create([
            'name' => 'Steel',
            'image' => 'types/steel.png',
            'color' => '#B0C4DE',
        ]);

        Type::create([
            'name' => 'Fairy',
            'image' => 'types/fairy.png',
            'color' => '#FFB6C1',
        ]);

        Type::create([
            'name' => 'normal',
            'image' => 'types/normal.png',
            'color' => '#6699FF',
        ]);

        // Ajoutez d'autres types si nécessaire...
    }
}
