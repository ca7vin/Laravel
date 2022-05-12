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
        // Sache Elias que j'adore créer des cruds a la main, merci beaucoup pour ça...
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->timestamps();
        });
    }
    // Ah vraiment j'adore, merci beaucoup à toi ! 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // Bon ok, j'avoue que c'est un peu relou mais t'es quand meme le meilleur haha
    public function down()
    {
        Schema::dropIfExists('emails');
    }
};
