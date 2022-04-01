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
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ville');
            $table->string('pays');
            $table->integer('effectif');
            $table->integer('avants');
            $table->integer('avantsMax')->unsigned();
            $table->integer('milieux');
            $table->integer('milieuxMax')->unsigned();
            $table->integer('arrieres');
            $table->integer('arrieresMax')->unsigned();
            $table->integer('remplacants');
            $table->integer('remplacantsMax')->unsigned();
            $table->integer('aucun');
            $table->integer('aucunMax')->unsigned();
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
        Schema::dropIfExists('equipes');
    }
};
