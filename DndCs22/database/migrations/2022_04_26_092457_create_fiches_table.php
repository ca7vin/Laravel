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
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users", "id");
            $table->string('name');
            $table->string('class');
            $table->integer('level')->unsigned();
            $table->string('background');
            $table->string('race');
            $table->string('alignment');
            $table->integer('experience')->unsigned();
            $table->integer('strength')->unsigned();
            $table->integer('dexterity')->unsigned();
            $table->integer('constitution')->unsigned();
            $table->integer('intelligence')->unsigned();
            $table->integer('wisdom')->unsigned();
            $table->integer('charisma')->unsigned();
            $table->integer('passive_wisdom')->unsigned();
            $table->integer('inspiration')->unsigned();
            $table->integer('proficiency')->unsigned();
            $table->integer('save_strength')->unsigned();
            $table->integer('save_dexterity')->unsigned();
            $table->integer('save_constitution')->unsigned();
            $table->integer('save_intelligence')->unsigned();
            $table->integer('save_wisdom')->unsigned();
            $table->integer('save_charisma')->unsigned();
            $table->integer('acrobatics')->unsigned();
            $table->integer('animal_handling')->unsigned();
            $table->integer('arcana')->unsigned();
            $table->integer('athletics')->unsigned();
            $table->integer('deception')->unsigned();
            $table->integer('history')->unsigned();
            $table->integer('insight')->unsigned();
            $table->integer('intimidation')->unsigned();
            $table->integer('investigation')->unsigned();
            $table->integer('medicine')->unsigned();
            $table->integer('nature')->unsigned();
            $table->integer('perception')->unsigned();
            $table->integer('performance')->unsigned();
            $table->integer('persuasion')->unsigned();
            $table->integer('religion')->unsigned();
            $table->integer('sleight_of_hand')->unsigned();
            $table->integer('stealth')->unsigned();
            $table->integer('survival')->unsigned();
            $table->integer('armor_class')->unsigned();
            $table->integer('initiative')->unsigned();
            $table->integer('speed')->unsigned();
            $table->integer('current_hitpoints')->unsigned();
            $table->integer('temporary_hitpoints')->unsigned();
            $table->string('hit_dice');
            $table->text('personality_traits');
            $table->text('personality_ideals');
            $table->text('personality_bonds');
            $table->text('personality_flaws');
            $table->text('profiencies_languages');
            $table->text('features_traits');
            $table->string('avatar');
            $table->string('spellcasting_class');
            $table->string('spellcasting_ability');
            $table->integer('spell_save_dc')->unsigned();
            $table->integer('spell_attack_bonus')->unsigned();
            $table->integer('platinum_coins')->unsigned();
            $table->integer('gold_coins')->unsigned();
            $table->integer('silver_coins')->unsigned();
            $table->integer('copper_coins')->unsigned();
            $table->text('inventory');
            $table->string('weapon1');
            $table->integer('bonus_attack1')->unsigned();
            $table->integer('bonus_damage1')->unsigned();
            $table->string('type_damage1');
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
        Schema::dropIfExists('fiches');
    }
};
