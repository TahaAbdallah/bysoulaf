<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_layouts', function (Blueprint $table) {
            $table->increments('id');
            $table->String('row1_title1');
            $table->String('row1_title2');
            $table->longText('row1_description');
            $table->String('row2_title1');
            $table->String('row2_title2');
            $table->String('row2_image');
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
        Schema::dropIfExists('home_layouts');
    }
}
