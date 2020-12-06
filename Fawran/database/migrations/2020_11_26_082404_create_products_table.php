<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_ar');
            $table->float('price',10,2);
            $table->float('offer_price',10,2);
            $table->string('image');
            $table->boolean('is_aviliable');
            $table->unsignedBigInteger('supermarket_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('supermarket_id')
          ->references('id')
          ->on('supermarkets')
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
        Schema::dropIfExists('products');
    }
}
