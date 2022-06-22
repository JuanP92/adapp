<?php

namespace Database\Seeders;

use App\Models\Formato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formato = Formato::factory()->create([
            'nombre' => 'Formato 1',
            'descripcion' => 'Descripcion'
        ]);
        $formato = Formato::factory()->create([
            'nombre' => 'Formato 2',
            'descripcion' => 'Descripcion'
        ]);
    }
}
