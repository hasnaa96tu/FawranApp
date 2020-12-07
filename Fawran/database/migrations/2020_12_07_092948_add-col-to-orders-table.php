<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('orders', function (Blueprint $table) {
          
        $table->dropColumn('user_id');

        $table->unsignedBigInteger('customer_id');
          $table->unsignedBigInteger('driver_id');

          $table->foreign('driver_id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');
        $table->foreign('customer_id')
      ->references('id')
      ->on('customers')
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
        //
        Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn('driver_id');
        $table->dropColumn('customer_id');
        });

    }
}
