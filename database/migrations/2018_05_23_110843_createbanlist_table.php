<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatebanlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('CreatebanlistTable', function (Blueprint $table) {
        $table->string('user_id');
        $table->string('email');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

          Schema::dropIfExists('CreatebanlistTable');
    }
}
