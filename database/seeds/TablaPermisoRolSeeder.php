<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaPermisoRolSeeder extends Seeder
{
    
    public function run()
    {
        $permisorols = [
            array('rol_id' => '1', 'permiso_id' => '1'),
            array('rol_id' => '1', 'permiso_id' => '2'),
            array('rol_id' => '1', 'permiso_id' => '3'),
            array('rol_id' => '1', 'permiso_id' => '4'),
            array('rol_id' => '2', 'permiso_id' => '2'),
            array('rol_id' => '2', 'permiso_id' => '3'),
            array('rol_id' => '2', 'permiso_id' => '4'),
            array('rol_id' => '2', 'permiso_id' => '1')
        ];
        DB::table('permiso_rol')->insert($permisorols);
    }
}
