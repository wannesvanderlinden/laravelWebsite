<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeeftijdSpel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('leeftijdsgroep_spel', function (Blueprint $table) {
             $table->bigInteger("spel_id")->unsigned();
             $table->bigInteger("leeftijdsgroep_id")->unsigned();
             $table->id();
             $table->foreign("spel_id")->references('id')->on('spels')->onDelete("cascade");
            $table->foreign("leeftijdsgroep_id")->references('id')->on('leeftijdsgroeps')->onDelete("cascade");
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('leeftijd_spels');
    }
}
