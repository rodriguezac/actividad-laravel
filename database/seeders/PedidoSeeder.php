<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// Este seeder inserta datos de ejemplo en la tabla 'pedidos'

class PedidoSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            ['producto' => 'Laptop', 'cantidad' => 1, 'total' => 950.00, 'id_usuario' => 1],
            ['producto' => 'Mouse inalámbrico', 'cantidad' => 3, 'total' => 80.00, 'id_usuario' => 2],
            ['producto' => 'Pantalla', 'cantidad' => 2, 'total' => 370.00, 'id_usuario' => 2],
            ['producto' => 'Audífonos', 'cantidad' => 1, 'total' => 115.00, 'id_usuario' => 3],
            ['producto' => 'Impresora', 'cantidad' => 1, 'total' => 120.00, 'id_usuario' => 5],
        ]);
    }
}
