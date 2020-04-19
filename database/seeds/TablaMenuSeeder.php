<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TablaMenuSeeder extends Seeder
{

    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $menus = [
            array('id' => '1', 'menu_id' => '0', 'nombre' => 'Admin', 'url' => '#', 'orden' => '1', 'icono' => 'fa-gear', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'menu_id' => '1', 'nombre' => 'Menú', 'url' => 'admin/menu', 'orden' => '2', 'icono' => 'fa-navicon', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'menu_id' => '1', 'nombre' => 'Menú - Rol', 'url' => 'admin/menu-rol', 'orden' => '3', 'icono' => 'fa-server', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'menu_id' => '1', 'nombre' => 'Usuarios', 'url' => 'admin/usuario', 'orden' => '1', 'icono' => 'fa-users', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'menu_id' => '1', 'nombre' => 'Permiso', 'url' => 'admin/permiso', 'orden' => '4', 'icono' => 'fa-hand-paper-o', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'menu_id' => '1', 'nombre' => 'Permiso - Rol', 'url' => 'admin/permiso-rol', 'orden' => '5', 'icono' => 'fa-ban', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '7', 'menu_id' => '0', 'nombre' => 'Libros', 'url' => 'admin/libro', 'orden' => '2', 'icono' => 'fa-book', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '8', 'menu_id' => '1', 'nombre' => 'Roles', 'url' => 'admin/rol', 'orden' => '6', 'icono' => 'fa-registered', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('menu')->insert($menus);
    }
}
