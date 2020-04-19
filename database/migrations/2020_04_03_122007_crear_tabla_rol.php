<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRol extends Migration
{
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50)->unique();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }
    public function down()
    {
        Schema::dropIfExists('rol');
    }
}
