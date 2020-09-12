<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resturant_id');
            $table->dateTime('estimated_delivery_time')->nullable();
            $table->string('delivery_address');
            $table->integer('customer_id');
            $table->decimal('price', 12,2);
            $table->string('comment');
            $table->timestamps();

            // $table->foreign('resturant_id')->references('id')->on('resturants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_orders');
    }
}
