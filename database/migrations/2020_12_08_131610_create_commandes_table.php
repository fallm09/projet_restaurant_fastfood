<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("dateC");
            $table->decimal("montant", 6, 2);
            $table->boolean("vente");
            $table->unsignedBigInteger("reglement_id");
            $table->unsignedBigInteger("client_id")->nullable();
            $table->unsignedBigInteger("etat_commande_id")->nullable();
            $table->foreign('reglement_id')->references('id')->on('reglements')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('etat_commande_id')->references('id')->on('etat_commandes')->onDelete('cascade');
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
        Schema::dropIfExists('commandes');
    }
}
