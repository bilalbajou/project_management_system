<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\db;

class VueProjet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement( "CREATE  VIEW `projet_t_u`  AS SELECT `p`.`id_projet` AS `id_projet`, 
        `t`.`id_tache` AS `id_tache`,
         `t`.`nom_tache` AS `nom_tache`,
          `t`.`état_tache` AS `état_tache`, 
          `u`.`name` AS `name` FROM ((`taches` `t` join `users` `u`) join `projets` `p`) 
          WHERE ((`t`.`projet` = `p`.`id_projet`) AND (`t`.`coloborateur` = `u`.`id`))  
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS vue_projet");

    }
  
    
}
