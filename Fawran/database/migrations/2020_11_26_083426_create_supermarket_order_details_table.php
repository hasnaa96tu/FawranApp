<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermarket_order_details', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('supermarket_id');
           $table->unsignedBigInteger('order_id');
           $table->unsignedBigInteger('product_id');
           $table->integer('quantity');
           $table->float('total_price',10,2);
           $table->text('notes');
            $table->text('notes_ar');
           $table->timestamps();

           $table->foreign('supermarket_id')
         ->references('id')
         ->on('supermarkets')
         ->onDelete('cascade');

         $table->foreign('order_id')
       ->references('id')
       ->on('orders')
       ->onDelete('cascade');

       $table->foreign('product_id')
     ->references('id')
     ->on('products')
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
        Schema::dropIfExists('supermarket_order_details');
    }
}
