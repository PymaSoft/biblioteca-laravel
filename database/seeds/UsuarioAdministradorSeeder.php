<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    // Habilitar este y deshabilitar el segundo al clonar
    /* public function run(){
        $usuario = Usuario::create([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'email' => 'pedroincora@gmail.com',
            'password' => 'pyma2012'
        ]);
        $usuario->roles()->sync(1);

    } */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'email' => 'pedroincora@gmail.com',
            'password' => bcrypt('pyma2012')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1
            // 'estado' => 1
        ]);
        DB::table('usuario')->insert([
            'usuario' => 'javier',
            'nombre' => 'javier',
            'email' => 'jacbpyma007@gmail.com',
            'password' => bcrypt('pyma2012')
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2
            // 'estado' => 1
        ]);
    }
}
