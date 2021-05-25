<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('products_id')->unsigned()->comment('商品プライマリー');
            $table->bigInteger('order_id')->unsigned()->comment('注文プライマリー');
            $table->bigInteger('shipment_status_id')->unsigned()->comment('発送状態プライマリー');
            $table->string('order_detail_number', 64)->comment('注文番号');
            $table->integer('order_quantity')->unsigned()->comment('注文個数');
            $table->timestamp('shipment_date')->comment('発送日');
            $table->timestamps();

            // $table->foreign('products_id')->references('id')->on('m_products');
            $table->foreign('order_id')->references('id')->on('t_orders');
            $table->foreign('shipment_status_id')->references('id')->on('m_shipment_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_order_details');
    }
}
