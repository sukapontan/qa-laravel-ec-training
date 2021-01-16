<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 注文詳細テーブルを作成
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
            $table->increments('id')->comment('注文詳細ID'); // PK
            $table->integer('products_id')->unsigned()->comment('商品ID'); // FK
            $table->integer('order_id')->unsigned()->comment('注文ID'); // FK
            $table->integer('shipment_status_id')->unsigned()->comment('発送状態ID'); // FK
            $table->string('order_detail_number', 64)->comment('注文番号');
            $table->integer('order_quantity')->comment('注文個数');
            $table->timestamp('shipment_date')->comment('発送日');

            // 商品IDの外部キー制約(個人でのmigrateテスト時は一時的に無効にする)
            $table->foreign('products_id')->references('id')->on('m_products');

            // 注文IDの外部キー制約
            $table->foreign('order_id')->references('id')->on('t_orders');

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
