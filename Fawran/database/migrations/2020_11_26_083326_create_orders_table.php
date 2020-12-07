<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('request_date')->nullable()->default(null);
            $table->timestamp('delivery_date')->nullable()->default(null);
            $table->integer('status');
            $table->string('location');
            $table->string('location_ar');
            $table->float('cost',10,2);
            $table->float('distance',10,2);
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
        Schema::dropIfExists('orders');
    }
}
