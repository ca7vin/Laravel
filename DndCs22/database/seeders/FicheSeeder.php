<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiches')->insert([
            'user_id' => 2,
            'name' => 'Sora Nemesis',
            'class' => 'Barbare',
            'level' => 2,
            'background' => 'Soldat',
            'race' => 'Drakéide',
            'alignment' => 'Chaotique bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 1,
            'constitution' => 1,
            'intelligence' => 1,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 12,
            'inspiration' => 1,
            'proficiency' => 2,
            'save_strength' => 5,
            'save_dexterity' => 1,
            'save_constitution' => 3,
            'save_intelligence' => 1,
            'save_wisdom' => 0,
            'save_charisma' => 1,
            'acrobatics' => 1,
            'animal_handling' => 1,
            'arcana' => 1,
            'athletics' => 1,
            'deception' => 1,
            'history' => 1,
            'insight' => 1,
            'intimidation' => 3,
            'investigation' => 1,
            'medicine' => 0,
            'nature' => 1,
            'perception' => 2,
            'performance' => 1,
            'persuasion' => 1,
            'religion' => 1,
            'sleight_of_hand' => 1,
            'stealth' => 1,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'J\'aime être fort et casser des choses.',
            'personality_ideals' => 'Indépendance. Quand les gens suivent les ordres aveuglément, ils embrassent une sorte de tyrannie (Chaotique).',
            'personality_bonds' => 'Quelqu\'un m\'a sauvé la vie sur le champ de bataille. À ce jour, je ne pourrais jamais laisser un ami derrière.',
            'personality_flaws' => 'J\'ai peu de respect pour celui qui n\'est pas un réel guerrier.',
            'profiencies_languages' => 'Armes courantes, armes de guerre, armures légères et intermédiaires, boucliers, véhicules terrestres, langue commune et draconique',
            'features_traits' => 'Rage (2/repos long; dégâts +2) | Défense sans armure | Ascendance draconique (dragon d\'or) | Résistance au dégâts de feu | Souffle draconique (2d6 ; DD Dex 11) | Grade militaire',
            'avatar' => 'token-annekat.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Épée à deux mains, épée courte (2), masse d\'armes (4), armure de cuir, dés, sac à dos, sac de couchage, gamelle, boite d\'allume-feu, torche (10), rations/1 jour (10), gourde, corde en chanvre de 15 m, vêtements communs, trophée, insigne de grade, bourse, 2 améthystes (35po/u), os de gobelin, Chat liquide, Potion de soin (2d4), Pierre magique qui brille quand on la lèche',
            'weapon1' => 'Epée à deux mains (2d6 +3)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 3,
            'type_damage1' => 'Tranchant',
        ]);
        DB::table('fiches')->insert([
            'user_id' => 3,
            'name' => 'Shin Akira',
            'class' => 'Guerrier',
            'level' => 2,
            'background' => 'Soldat',
            'race' => 'Humain',
            'alignment' => 'Loyal bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-alex.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
        DB::table('fiches')->insert([
            'user_id' => 4,
            'name' => 'Byron',
            'class' => 'Occultiste',
            'level' => 2,
            'background' => 'Acolyte',
            'race' => 'Tieffelin',
            'alignment' => 'Chaotique bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-marcyl.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
        DB::table('fiches')->insert([
            'user_id' => 5,
            'name' => 'Gebedo Gebedo',
            'class' => 'Magicien',
            'level' => 2,
            'background' => 'Acolyte',
            'race' => 'Gnome des montagnes',
            'alignment' => 'Loyal bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-samy.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
        //
        DB::table('fiches')->insert([
            'user_id' => 6,
            'name' => 'Galestron',
            'class' => 'Druide',
            'level' => 2,
            'background' => 'Fouille-merde',
            'race' => 'Drakéide',
            'alignment' => 'Loyal bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-nico.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
        DB::table('fiches')->insert([
            'user_id' => 7,
            'name' => 'Ennar Caskwing',
            'class' => 'Clerc',
            'level' => 2,
            'background' => 'Acolyte',
            'race' => 'Humain',
            'alignment' => 'Loyal bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-jade.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
        DB::table('fiches')->insert([
            'user_id' => 8,
            'name' => 'Inferno',
            'class' => 'Sorcière',
            'level' => 2,
            'background' => 'Acolyte',
            'race' => 'Tieffelin',
            'alignment' => 'Loyal bon',
            'experience' => 300,
            'strength' => 3,
            'dexterity' => 2,
            'constitution' => 2,
            'intelligence' => 0,
            'wisdom' => 0,
            'charisma' => 1,
            'passive_wisdom' => 11,
            'inspiration' => 0,
            'proficiency' => 2,
            'save_strength' => 0,
            'save_dexterity' => 0,
            'save_constitution' => 0,
            'save_intelligence' => 0,
            'save_wisdom' => 0,
            'save_charisma' => 0,
            'acrobatics' => 0,
            'animal_handling' => 0,
            'arcana' => 0,
            'athletics' => 0,
            'deception' => 0,
            'history' => 0,
            'insight' => 0,
            'intimidation' => 0,
            'investigation' => 0,
            'medicine' => 0,
            'nature' => 0,
            'perception' => 0,
            'performance' => 0,
            'persuasion' => 0,
            'religion' => 0,
            'sleight_of_hand' => 0,
            'stealth' => 0,
            'survival' => 0,
            'armor_class' => 10,
            'initiative' => 2,
            'speed' => 6,
            'current_hitpoints' => 14,
            'temporary_hitpoints' => 0,
            'hit_dice' => "1d8",
            'personality_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_ideals' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_bonds' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'personality_flaws' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'profiencies_languages' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'features_traits' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?',
            'avatar' => 'token-alix.png',
            'spellcasting_class' => 'none',
            'spellcasting_ability' => 'none',
            'spell_save_dc' => 0,
            'spell_attack_bonus' => 0,
            'platinum_coins' => 200,
            'gold_coins' => 200,
            'silver_coins' => 200,
            'copper_coins' => 200,
            'inventory' => 'Some stuff',
            'weapon1' => 'Epée longue (1d8 / 1d10 2mains)',
            'bonus_attack1' => 5,
            'bonus_damage1' => 2,
            'type_damage1' => 'Tranchant',
        ]);
    }
}
