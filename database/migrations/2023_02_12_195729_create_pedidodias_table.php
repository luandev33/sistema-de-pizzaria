<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     
    public function up()
    {
        Schema::create('pedidodias', function (Blueprint $table) {
            $table->id();
            $table->string('nome',55);
            $table->string('sabor',55);
            $table->string('borda',55);
            $table->string('hora',55);
            $table->string('dincar',55);
            $table->string('entrtegaretirada',55);
            $table->double('valor',8,2);
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
        Schema::dropIfExists('pedidodias');
    }
};
