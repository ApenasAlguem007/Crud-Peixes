<?php

namespace Database\Seeders;

use App\Models\Fish;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criar Tipos de Ambientes
        $rio = Type::create(['name' => 'Rio']);
        $mar = Type::create(['name' => 'Mar']);

        // Criar Peixes de Rio
        Fish::create([
            'name' => 'Tilápia',
            'color' => 'Cinza',
            'type_id' => $rio->id,
        ]);

        Fish::create([
            'name' => 'Pacu',
            'color' => 'Prata',
            'type_id' => $rio->id,
        ]);

        Fish::create([
            'name' => 'Pintado',
            'color' => 'Cinza com manchas',
            'type_id' => $rio->id,
        ]);

        Fish::create([
            'name' => 'Tucunaré',
            'color' => 'Amarelo e verde',
            'type_id' => $rio->id,
        ]);

        // Criar Peixes de Mar
        Fish::create([
            'name' => 'Sardinha',
            'color' => 'Prata',
            'type_id' => $mar->id,
        ]);

        Fish::create([
            'name' => 'Atum',
            'color' => 'Azul e prata',
            'type_id' => $mar->id,
        ]);

        Fish::create([
            'name' => 'Peixe-palhaço',
            'color' => 'Laranja e branco',
            'type_id' => $mar->id,
        ]);

        Fish::create([
            'name' => 'Robalo',
            'color' => 'Prata',
            'type_id' => $mar->id,
        ]);
    }
}