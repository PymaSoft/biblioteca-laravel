<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibro extends Migration
{
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 100);
            $table->string('isbn', 30)->unique();
            $table->string('autor', 100);
            $table->unsignedTinyInteger('cantidad');
            $table->string('editorial', 50)->nullable();
            $table->string('foto', 100)->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
