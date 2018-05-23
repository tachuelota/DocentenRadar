<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('docenten', function (Blueprint $table) {
          $table->Uuid('id');
          $table->id('school_id');
          $table->string('voornaam');
          $table->string('tussenvoegsel');
          $table->string('achternaam');
          $table->string('Vak');
          $table->double('AvgCijfer')->nullable($value = 0);
          //Positie per catogorie!
          $table->string('School')->nullable();
          $table->rememberToken();
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
      Schema::dropIfExists('docenten');
    }
}
