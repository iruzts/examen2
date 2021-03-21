<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_articulos', function (Blueprint $table) {
            $table->id();
            $table->integer('Código Artículo', 50)->nullable();
            $table->string('Nombre Artículo', 50)->nullable();
            $table->integer('Cantidad', 50)->nullable();
            $table->integer('Precio', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_articulos');
    }
}
