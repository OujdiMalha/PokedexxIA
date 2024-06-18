<?php

namespace Database\Seeders;

use App\Models\Attaque;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupération des types existants
        $typeEau = Type::where('nom', 'Eau')->first();
        $typeFeu = Type::where('nom', 'Feu')->first();

        // Création des Pokémon
        $pokemons = [
            Pokemon::create([
                'nom' => 'Carapuce',
                'pointsDeVie' => 100,
                'poids' => 9.0,
                'taille' => 0.5
            ]),
            Pokemon::create([
                'nom' => 'Salamèche',
                'pointsDeVie' => 80,
                'poids' => 8.5,
                'taille' => 0.6
            ]),
            Pokemon::create([
                'nom' => 'Bulbizarre',
                'pointsDeVie' => 90,
                'poids' => 6.9,
                'taille' => 0.7
            ]),
            Pokemon::create([
                'nom' => 'Pikachu',
                'pointsDeVie' => 70,
                'poids' => 6.0,
                'taille' => 0.4
            ]),
            Pokemon::create([
                'nom' => 'Stari',
                'pointsDeVie' => 60,
                'poids' => 34.5,
                'taille' => 0.8
            ]),
            Pokemon::create([
                'nom' => 'Evoli',
                'pointsDeVie' => 65,
                'poids' => 6.5,
                'taille' => 0.3
            ]),
        ];

        // Association des types aux Pokémon
        $pokemons[0]->types()->attach($typeEau->id);         // Carapuce - Eau
        $pokemons[1]->types()->attach($typeFeu->id);         // Salamèche - Feu
        $pokemons[2]->types()->attach($typeEau->id);         // Bulbizarre - Eau
        $pokemons[3]->types()->attach($typeFeu->id);         // Pikachu - Feu
        $pokemons[4]->types()->attach($typeEau->id);         // Stari - Eau
        $pokemons[5]->types()->attach($typeFeu->id);         // Evoli - Feu

        // Création des attaques
        Attaque::create([
            'nom' => 'Pistolet à O',
            'image' => 'pistolet_o.png',
            'degats' => 40,
            'description' => 'Une attaque d\'eau rapide.',
            'pokemon_id' => $pokemons[0]->id,
            'type_id' => $typeEau->id
        ]);

        Attaque::create([
            'nom' => 'Flammèche',
            'image' => 'flammeche.png',
            'degats' => 50,
            'description' => 'Une attaque de feu brûlante.',
            'pokemon_id' => $pokemons[1]->id,
            'type_id' => $typeFeu->id
        ]);

        Attaque::create([
            'nom' => 'Vague Hydro',
            'image' => 'vague_hydro.png',
            'degats' => 45,
            'description' => 'Une attaque d\'eau puissante.',
            'pokemon_id' => $pokemons[2]->id,
            'type_id' => $typeEau->id
        ]);

        Attaque::create([
            'nom' => 'Brasier',
            'image' => 'brasier.png',
            'degats' => 55,
            'description' => 'Une attaque de feu intense.',
            'pokemon_id' => $pokemons[3]->id,
            'type_id' => $typeFeu->id
        ]);

        Attaque::create([
            'nom' => 'Surf',
            'image' => 'surf.png',
            'degats' => 65,
            'description' => 'Une attaque d\'eau massive.',
            'pokemon_id' => $pokemons[4]->id,
            'type_id' => $typeEau->id
        ]);

        Attaque::create([
            'nom' => 'Lance-flammes',
            'image' => 'lance_flammes.png',
            'degats' => 60,
            'description' => 'Une attaque de feu dévastatrice.',
            'pokemon_id' => $pokemons[5]->id,
            'type_id' => $typeFeu->id
        ]);
    }
}

