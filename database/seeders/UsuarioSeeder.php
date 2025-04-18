<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// Este seeder inserta datos de ejemplo en la tabla 'usuarios'

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nombre' => 'Benjamín García', 'correo' => 'benjamin@gmail.com', 'telefono' => '12345678'],
            ['nombre' => 'Thalía Rodríguez', 'correo' => 'thalia@gmail.com', 'telefono' => '23456789'],
            ['nombre' => 'Hermayonie Centeno', 'correo' => 'hermayonie@gmail.com', 'telefono' => '34567890'],
            ['nombre' => 'Jacqueline Quiroz', 'correo' => 'jacqueline@gmail.com', 'telefono' => '45678901'],
            ['nombre' => 'Harry Rodríguez', 'correo' => 'harry@gmail.com', 'telefono' => '56789012'],
        ]);
    }
}
