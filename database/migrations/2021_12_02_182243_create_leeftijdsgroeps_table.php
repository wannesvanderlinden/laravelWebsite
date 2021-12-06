<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeeftijdsgroepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leeftijdsgroeps', function (Blueprint $table) {
          
            $table->id();
             $table->string("name");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('leeftijdsgroep_spel');
        Schema::dropIfExists('leeftijdsgroeps');
    }
}
