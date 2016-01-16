<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturesToColleges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            //''
            $table->String('name');
            $table->String('population');
            $table->String('cover');
            $table->String('location');
            $table->Boolean('active');
            $table->String("updated_at");
            $table->String("created_at");
                        $table->Integer("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colleges', function (Blueprint $table) {
            //
        });
    }
}
