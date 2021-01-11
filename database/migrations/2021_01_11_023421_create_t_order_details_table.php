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
            $table->unsignedBigInteger('products_id'); // 商品ID ※要外部キー設定
            $table->unsignedBigInteger('order_id'); // 注文ID ※要外部キー設定
            $table->unsignedBigInteger('shipment_status_id'); // 発送状態 ※要外部キー設定
            $table->char('order_detail_number', 64); // 注文番号
            $table->integer('order_quantity'); // 注文個数
            $table->timestamps('shipment_date'); // 発送日
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
