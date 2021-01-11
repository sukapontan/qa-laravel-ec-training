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
            $table->bigIncrements('id'); // 注文詳細ID(PK)
            $table->unsignedBigInteger('products_id'); // 商品ID(FK)
            $table->unsignedBigInteger('order_id'); // 注文ID(FK)
            $table->unsignedBigInteger('shipment_status_id'); // 発送状態ID(FK)
            $table->string('order_detail_number', 64); // 注文番号
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
