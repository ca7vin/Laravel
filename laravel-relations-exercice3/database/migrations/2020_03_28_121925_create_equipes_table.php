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
            $table->string('effectif');
            $table->integer('avants')->unsigned();
            $table->integer('avantsMax')->unsigned();
            $table->integer('milieux')->unsigned();
            $table->integer('milieuxMax')->unsigned();
            $table->integer('arrieres')->unsigned();
            $table->integer('arrieresMax')->unsigned();
            $table->integer('remplacants')->unsigned();
            $table->integer('remplacantsMax')->unsigned();
            $table->integer('aucun')->unsigned();
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
