<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::factory()->create([
            'nombre' => 'Administrador',
            'descripcion' => 'Rol de administrador que tiene control sobre todas las instancias de la aplicación'
        ]);
        $rol2 = Rol::factory()->create([
            'nombre' => 'Estudiante',
            'descripcion' => 'Usuario normal que se registra en la aplicación'
        ]);
        $rol->save();
        $rol2->save();
    }
}
