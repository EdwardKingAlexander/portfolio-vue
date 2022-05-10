<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('description');
            // default to the default location, unless there is a backorder
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('inventory_locations');
            $table->integer('quantity');
            // held for pickup, picked up and complete, held for delivery, delivered and complete, 
            // shipped and held, shipped and picked up
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('inventory_items');
    }
}
