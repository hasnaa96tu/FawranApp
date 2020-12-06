<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_order_details', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('drug_id');
          $table->unsignedBigInteger('order_id');
          $table->unsignedBigInteger('pharmacy_id');
          $table->integer('quantity');
          $table->float('total_price',10,2);
          $table->boolean('is_RX');
          $table->string('preciption_img');
          $table->timestamps();

          $table->foreign('pharmacy_id')
        ->references('id')
        ->on('pharmacies')
        ->onDelete('cascade');

        $table->foreign('order_id')
      ->references('id')
      ->on('orders')
      ->onDelete('cascade');

      $table->foreign('drug_id')
    ->references('id')
    ->on('drugs')
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
        Schema::dropIfExists('pharmacy_order_details');
    }
}
