<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->comment('仕入ID');
            $table->integer('purchase_price')->unsigned()->comment('仕入れ価格');
            $table->integer('purchase_quantity')->unsigned()->comment('仕入個数');
            $table->string('purchase_company', 128)->comment('仕入先会社');
            $table->timestamp('order_date')->comment('発送日');
            $table->timestamp('purchase_date')->nullable()->comment('納入日');
            $table->unsignedInteger('product_id')->unsigned()->comment('商品ID');
            $table->foreign('product_id')
            ->references('id')
            ->on('m_products')
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
        Schema::dropIfExists('t_purchases');
    }
}
