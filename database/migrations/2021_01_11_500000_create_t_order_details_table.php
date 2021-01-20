<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 「注文詳細」テーブルを作成
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
            $table->increments('id')->comment('注文詳細ID');
            $table->integer('products_id')->unsigned()->comment('商品ID');
            $table->integer('order_id')->unsigned()->comment('注文ID');
            $table->integer('shipment_status_id')->unsigned()->comment('発送状態ID');
            $table->string('order_detail_number', 64)->comment('注文番号');
            $table->integer('order_quantity')->comment('注文個数');
            $table->timestamp('shipment_date')->comment('発送日');

            // 商品IDの外部キー制約(※商品テーブルが無い状態でのmigrateテスト時は一時的に無効にすること)
            $table->foreign('products_id')->references('id')->on('m_products')->onDelete('cascade');

            // 注文IDの外部キー制約
            $table->foreign('order_id')->references('id')->on('t_orders')->onDelete('cascade');

            // 発送状態IDの外部キー制約
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