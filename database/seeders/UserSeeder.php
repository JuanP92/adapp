<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = User::factory()->create([
            'name' => 'Admin',
            'codigo' => '0000000',
            'password' => Hash::make('admin123123'),
            'tipo_doc' => 'cc',
            'documento' => '000000000000',
            'celular' => '000000000000',
            'rol_id' => '1',
            'email' => 'admin@example.com'
        ]);
    }
}
