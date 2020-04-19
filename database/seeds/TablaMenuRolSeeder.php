<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaMenuRolSeeder extends Seeder
{

    public function run()
    {
        $menurols = [
            array('rol_id' => '1', 'menu_id' => '1'),
            array('rol_id' => '1', 'menu_id' => '2'),
            array('rol_id' => '1', 'menu_id' => '3'),
            array('rol_id' => '1', 'menu_id' => '4'),
            array('rol_id' => '1', 'menu_id' => '5'),
            array('rol_id' => '1', 'menu_id' => '6'),
            array('rol_id' => '1', 'menu_id' => '7'),
            array('rol_id' => '2', 'menu_id' => '7'),
            array('rol_id' => '1', 'menu_id' => '8')
        ];
        DB::table('menu_rol')->insert($menurols);
    }
}
