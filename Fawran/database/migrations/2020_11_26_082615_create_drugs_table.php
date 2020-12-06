<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('name_ar');
          $table->float('price',10,2);
          $table->float('offer_price',10,2);
          $table->string('image');
          $table->boolean('is_aviliable');
          $table->unsignedBigInteger('pharmacy_id');
          $table->unsignedBigInteger('medical_company_id');
          $table->unsignedBigInteger('category_id');
          $table->timestamps();

          $table->foreign('pharmacy_id')
        ->references('id')
        ->on('pharmacies')
        ->onDelete('cascade');

        $table->foreign('medical_company_id')
        ->references('id')
        ->on('medical_companies')
        ->onDelete('cascade');

        $table->foreign('category_id')
      ->references('id')
      ->on('categories')
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
        Schema::dropIfExists('drugs');
    }
}
