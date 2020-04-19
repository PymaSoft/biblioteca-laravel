<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_usuariorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuariorol_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            // $table->boolean('estado')->default(1);
            // $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
