<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    /**
     * Consulta 1:Recupera todos los pedidos del usuario con ID 2.
    */
    public function pedidosUsuario2()
    {
        return DB::table('pedidos')
            ->where('id_usuario', 2)
            ->get();
    }

    /**
     * Consulta 2: Obtiene todos los pedidos junto con el nombre y correo del usuario asociado.
    */
    public function pedidosConUsuario()
    {
        return DB::table('pedidos')
            ->join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
            ->get();
    }

    /**
     * Consulta 3: Recupera los pedidos cuyo total esté entre $100 y $250.
    */
    public function pedidosRangoTotal()
    {
        return DB::table('pedidos')
            ->whereBetween('total', [100, 250])
            ->get();
    }

    /**
     * Consulta 4: Encuentra todos los usuarios cuyos nombres empiezan con la letra "R".
    */
    public function usuariosConR()
    {
        return DB::table('usuarios')
            ->where('nombre', 'like', 'R%')
            ->get();
    }

    /**
     * Consulta 5: Cuenta cuántos pedidos hay registrados para el usuario con ID 5.
    */
    public function totalPedidosUsuario5()
    {
        return DB::table('pedidos')
            ->where('id_usuario', 5)
            ->count();
    }

    /**
     * Consulta 6: Recupera todos los pedidos con la información del usuario,
     * ordenados por el total de forma descendente.
    */
    public function pedidosOrdenados()
    {
        return DB::table('pedidos')
            ->join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre')
            ->orderByDesc('total')
            ->get();
    }

    /**
     * Consulta 7: Calcula la suma total del campo "total" en todos los pedidos.
    */
    public function sumaTotalPedidos()
    {
        return DB::table('pedidos')->sum('total');
    }

    /**
     * Consulta 8: Encuentra el pedido más barato junto con el nombre del usuario que lo realizó.
    */
    public function pedidoMasBarato()
    {
        return DB::table('pedidos')
            ->join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre')
            ->orderBy('total', 'asc')
            ->limit(1)
            ->get();
    }

    /**
     * Consulta 9: Muestra el producto, cantidad y total de cada pedido, agrupados por usuario.
    */
    public function pedidosAgrupados()
    {
        return DB::table('pedidos')
            ->join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
            ->select('usuarios.nombre', 'pedidos.producto', 'pedidos.cantidad', 'pedidos.total')
            ->orderBy('usuarios.nombre')
            ->get();
    }
}
