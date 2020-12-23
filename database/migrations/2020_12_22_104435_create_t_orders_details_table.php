<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTOrdersDetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_orders_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_detail_id');
            $table->integer('products_id');
            $table->integer('order_id')->unsigned();
            $table->integer('shipment_status_id')->unsigned();
            $table->string('order_detail_number', 64);
            $table->integer('order_quanity');
            $table->timestamp('shipment_date');
            $table->foreign('shipment_status_id')
            ->references('id')
            ->on('m_shipments_statuses')
            ->onDelete('cascade');
            $table->foreign('order_id')
            ->references('id')
            ->on('t_orders')
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
        Schema::dropIfExists('t_orders_details');
    }
}
