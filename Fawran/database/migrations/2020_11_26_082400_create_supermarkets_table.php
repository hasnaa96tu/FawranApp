<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermarkets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('name_ar');
            $table->string('location');
              $table->string('location_ar');
            $table->string('phone_number');
              $table->string('image');
            $table->timestamps();

            $table->foreign('category_id')
          ->references('id')
          ->on('categories')
          ->onDelete('cascade');

          $table->foreign('user_id')
        ->references('id')
        ->on('users')
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
        Schema::dropIfExists('supermarkets');
    }
}
