<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('purchase_price');
            $table->Integer('purchase_quantity');
            $table->string('purchase_company', 128);
            // 発送日
            $table->timestamp('order_date');
            // 納入日
            $table->timestamp('purchase_date')->nullable();
            // 仕入れの商品ID
            $table->unsignedBigInteger('product_id');

            //商品名のidと仕入れ商品のidの外部キー
            $table->foreign('product_id')->references('id')->on('m_products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_purchases');
    }
}
