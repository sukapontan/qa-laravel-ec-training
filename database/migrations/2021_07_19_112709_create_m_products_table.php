<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_products', function (Blueprint $table) {

            $table->bigIncrements('id');
            //製品名
            $table->string('product_name', 64);
            $table->unsignedBigInteger('category_id');
            // 販売単価
            $table->integer('price');
            // 商品説明
            $table->text('discription', 256);
            $table->unsignedBigInteger('sale_status_id');
            $table->unsignedBigInteger('product_status_id');
            // 商品登録日
            $table->timestamp('regist_date');
            // 後ほどマイグレーション
            // $table->unsignedBigInteger('user_id');
            // 復元可能な削除
            $table->char('delete_flag', 1);

            $table->foreign('category_id')->references('id')->on('m_categories');
            $table->foreign('sale_status_id')->references('id')->on('m_sale_statuses');
            $table->foreign('product_status_id')->references('id')->on('m_product_statuses');
            // $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_products');
    }
}
