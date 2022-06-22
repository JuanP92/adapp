<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Tipo::factory()->create([
            'nombre' => 'Deportiva',
            'descripcion' => 'Actividades deportivas'
        ]);
        $rol2 = Tipo::factory()->create([
            'nombre' => 'Recreativas',
            'descripcion' => 'Actividades recreativas'
        ]);
    }
}
