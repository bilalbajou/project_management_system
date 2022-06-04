<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->id("id_reunion")->autoIncrement();
            $table->string("sujet");
            $table->dateTime("date_heure");
            $table->text("description")->nullable();
            $table->enum("etat_reunion",["Planifié","Annulé","Terminée"]);
            $table->unsignedBigInteger("projet");
            $table->foreign("projet")->references("id_projet")->on("projets")->onDelete('cascade');
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
        Schema::dropIfExists('reunions');
    }
}
