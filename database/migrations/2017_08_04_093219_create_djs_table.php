<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('activité');
            $table->integer('tel_fixe');
            $table->integer('fax');
            $table->string('forme_juridique');
            $table->float('capital',15,2);
            $table->date('date_création');
            $table->string('email');
            $table->text('adresse');
            $table->string('etat_certificat_negatif');
            $table->string('etat_statut');
            $table->string('type_siege_social');
            $table->string('etat_siege_social');
            $table->string('etat_patente');
            $table->string('etat_registre_commerce');
            $table->date('anonce_legal');
            $table->string('etat_anonce_legal');
            $table->string('type_cnss');
            $table->string('etat_cnss');
            $table->string('etat_cachet');
            $table->string('etat_ouverture_compte');
            $table->string('etat_dossier_juridique');
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
        Schema::dropIfExists('djs');
    }
}
