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
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('order_id')->unique();
            $table->unsignedBigInteger('shipment_status_id');
            $table->string('order_detail_number', 64)->unique();
            $table->unsignedInteger('order_quantity');
            $table->timestamp('shipment_date')->nullable();

            // products_idをm_productsテーブルのidと紐づけ（外部キー制約） ※小野さんの実装がマージされたらコメントアウト解除予定
            $table->foreign('products_id')->references('id')->on('m_products');
            // order_idをt_ordersテーブルのidと紐づけ（外部キー制約）
            $table->foreign('order_id')->references('id')->on('t_orders')->onDelete('cascade');
            // shipment_status_idをm_shipment_statusesテーブルのidと紐づけ（外部キー制約）
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
