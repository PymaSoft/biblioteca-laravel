<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaPermisoRolSeeder extends Seeder
{
    
    public function run()
    {
        $permisoRols = [
            array('rol_id' => '2', 'permiso_id' => '1'),
            array('rol_id' => '2', 'permiso_id' => '2')
        ];
        DB::table('permiso_rol')->insert($permisoRols);
    }
}
