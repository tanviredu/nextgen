<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FutureAndTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('future_and_trainings_table', function (Blueprint $table) {
         $table->increments('id');
         $table->string('month');
         $table->string('from_date');
         $table->string('to_date');
         $table->text('tropic');
         $table->string('created_by');
         $table->boolean('status')->default(0);
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
