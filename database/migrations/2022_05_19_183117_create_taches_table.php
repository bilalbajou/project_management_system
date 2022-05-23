<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id("id_tache")->autoIncrement();
            $table->string("nom_tache");
            $table->string("description_tache")->nullable();
            $table->date("date_début");
            $table->unsignedBigInteger("durée");
            $table->enum("état_tache",["En Cours","Terminée"])->default("En Cours");
            $table->unsignedBigInteger("projet");
            $table->unsignedBigInteger("collaborateur");
            $table->foreign("projet")->references("id_projet")->on("projets");
            $table->foreign("collaborateur")->references("id")->on("users");
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
        Schema::dropIfExists('taches');
    }
}
