<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaUsuarioRolSeeder extends Seeder
{
    public function run()
    {
        $usuariorols = [
            array('rol_id' => '1', 'usuario_id' => '1'),
            array('rol_id' => '2', 'usuario_id' => '2')
        ];
        DB::table('usuario_rol')->insert($usuariorols);
    }
}
