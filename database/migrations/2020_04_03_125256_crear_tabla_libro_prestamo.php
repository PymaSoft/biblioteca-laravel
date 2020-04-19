<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibroPrestamo extends Migration
{
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_libroprestamo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id', 'fk_libroprestamo_libro')->references('id')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a', 100);
            $table->boolean('estado')->default(1);
            $table->date('fecha_devolucion')->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('libro_prestamo');
    }
}
