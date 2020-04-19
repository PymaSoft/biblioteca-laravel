<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TablaPermisoSeeder extends Seeder
{
    /* factory(Permiso::::class)->times(50)->create();             // Creará 50 items, lo de abajo no irá nada */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $permisos = [
            array('id' => '1', 'nombre' => 'Crear libro', 'slug' => 'crear-libro', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre' => 'Prestar libro', 'slug' => 'prestar-libro', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'nombre' => 'Editar libro', 'slug' => 'editar-libro', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'nombre' => 'Listar libro', 'slug' => 'listar-libro', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('permiso')->insert($permisos);
    }
}
