<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBasicsToTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('lookingfor');
            $table->String('when');
            $table->String('programs');
            $table->Integer('prospie');
            $table->Integer('college');


            $table->String('matters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
