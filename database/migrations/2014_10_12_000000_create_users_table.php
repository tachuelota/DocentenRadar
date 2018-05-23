<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Uuid('id');
            $table->id('school_id');
            $table->string('name');
            $table->string('voornaam');
            $table->string('tussenvoegsel');
            $table->string('achternaam');
            $table->date('DoB');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('SocialeMedia')->nullable();
            $table->boolean('Verified')->nullable($value = true);
            $table->integer('rechten')->nullable($value = true);
            $table->integer('marks');
            //Fafo docent
            //Haat docent
            //Docent per catogorie gekozen!!
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
        Schema::dropIfExists('users');
    }
}
