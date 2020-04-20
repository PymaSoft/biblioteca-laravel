<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso',
            'menu',
            'menu_rol',
            'permiso_rol',
            'usuario',
            'usuario_rol'            
        ]);
        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
        $this->call(TablaMenuSeeder::class);
        $this->call(TablaMenuRolSeeder::class);
        $this->call(TablaPermisoRolSeeder::class);
        $this->call(UsuarioAdministradorSeeder::class); 
    }

     protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
