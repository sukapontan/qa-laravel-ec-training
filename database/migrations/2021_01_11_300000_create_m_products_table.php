<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->comment('商品ID');
            $table->string('product_name', 64)->comment('商品名');
            $table->unsignedInteger('category_id')->comment('カテゴリー');
            $table->integer('price')->unsigned()->comment('販売単価');
            $table->string('description', 256)->nullable()->comment('商品説明');
            $table->unsignedInteger('sale_status_id')->comment('販売状態');
            $table->unsignedInteger('product_status_id')->comment('商品状態');
            $table->timestamp('regist_date')->comment('商品登録日');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->integer('delete_flag')->comment('deleteフラグ');
            $table->foreign('category_id')
            ->references('id')
            ->on('m_categories')
            ->onDelete('cascade');
            $table->foreign('sale_status_id')
            ->references('id')
            ->on('m_sale_statuses')
            ->onDelete('cascade');
            $table->foreign('product_status_id')
            ->references('id')
            ->on('m_product_statuses')
            ->onDelete('cascade');
            // ユーザIDの外部キー制約(※ユーザテーブルが無い状態でのmigrateテスト時は一時的に無効にすること)
            $table->foreign('user_id')
            ->references('id')
            ->on('m_users')
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
        Schema::dropIfExists('m_products');
    }
}
