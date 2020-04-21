<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //
         Schema::create('slider_table', function (Blueprint $table) {
         $table->increments('id');
         $table->string('slider_text');
         $table->string('slider_image');
         $table->string('created_by');
         $table->boolean('soft_delete')->default(0);
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
        //
    }
}
