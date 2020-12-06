<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('ph_sm_id');
            $table->boolean('sun');
            $table->boolean('mon');
            $table->boolean('thu');
            $table->boolean('wed');
            $table->boolean('thr');
            $table->boolean('fri');
            $table->boolean('sat');
            $table->timestamp('open_time')->nullable()->default(null);
            $table->timestamp('close_time')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('type_id')
          ->references('id')
          ->on('types')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_times');
    }
}
