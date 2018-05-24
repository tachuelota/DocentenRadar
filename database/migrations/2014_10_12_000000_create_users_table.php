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
            $table->string('school_id')->nullable();//Temp
            $table->string('name');
            $table->string('voornaam')->nullable();//Temp
            $table->string('tussenvoegsel')->nullable();//Temp
            $table->string('achternaam')->nullable();//Temp
            $table->date('DoB')->nullable();//Temp
            $table->string('email')->unique();
            $table->string('password');
            $table->string('SocialeMedia')->nullable();
            $table->boolean('Verified')->nullable($value = true);
            $table->double('rechten')->nullable($value = true);
            $table->double('marks')->nullable();//Temp
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
