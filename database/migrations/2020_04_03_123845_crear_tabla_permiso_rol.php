<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRol extends Migration
{
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_permisorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisorol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('permiso_rol');
    }
}
