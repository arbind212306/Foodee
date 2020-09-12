<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('place_order_id');
            $table->integer('menu_item_id');
            $table->integer('quanity')->nullable();
            $table->decimal('item_price', 12,2)->nullable();
            $table->decimal('price', 12,2)->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('in_orders');
    }
}
