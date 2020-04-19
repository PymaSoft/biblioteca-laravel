<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    // Habilitar este y deshabilitar el segundo al clonar
    /* public function run(){
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            Rol::create([
                'nombre' => $value
            ]);
        }
    } */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $rols = [
            array('id' => '1', 'nombre' => 'administrador', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'nombre' => 'editor', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'nombre' => 'supervisor', 'created_at' => $now, 'updated_at' => $now)
        ];
        DB::table('rol')->insert($rols);
    }
}
