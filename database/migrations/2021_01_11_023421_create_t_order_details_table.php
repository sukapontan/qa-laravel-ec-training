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
            $table->unsignedInteger('products_id')->comment('商品ID'); // FK
            $table->unsignedInteger('order_id')->comment('注文ID'); // FK
            $table->unsignedInteger('shipment_status_id')->comment('発送状態ID'); // FK
            $table->string('order_detail_number', 64)->comment('注文番号');
            $table->integer('order_quantity')->comment('注文個数');
            $table->timestamps('shipment_date'); // 発送日

            // ↓個人でのテスト時は外部キー制約は一時的に無効にする↓
            // $table->foreign('products_id')->reference('id')->on('m_products'); // 商品IDの外部キー制約
            // $table->foreign('order_id')->reference('id')->on('t_orders'); // 注文IDの外部キー制約
            // $table->foreign('shipment_status_id')->reference('id')->on('m_shipment_statuses'); // 発送状態IDの外部キー制約
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
