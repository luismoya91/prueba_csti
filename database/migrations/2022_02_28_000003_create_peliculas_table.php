<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_categoria')
                ->nullable()
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('id_autor')
                ->nullable()
                ->references('id')
                ->on('autores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nombre', 120);
            $table->date('fecha_lanzamiento');
            $table->string('productora', 120);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
