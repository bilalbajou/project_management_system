<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id("id_projet")->autoIncrement();
            $table->string("Nom_projet");
            $table->date("Date_début");
            $table->date("Date_fin");
            $table->text("description_projet")->nullable();
            $table->enum("etat_projet",["En cours","Terminée"]);
            $table->unsignedBigInteger("Chef_projet");
            $table->foreign("Chef_projet")->references("id")->on("users")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
