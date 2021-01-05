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
            $table->bigIncrements('id');
            $table->string('product_name', 64);
            $table->integer('category_id');
            $table->integer('price');
            $table->string('description', 256);
            //外部キー制約
            // $table->foreign('sale_status_id')
            //       ->references('id')
            //       ->on('m_sales_statuses')
            //       ->onDelete('cascade');
            // $table->foreign('product_status_id')
            //       ->references('id')
            //       ->on('m_products_statuses')
            //       ->onDelete('cascade');
            $table->timestamps('regist_date');
            $table->integer('user_id');
            $table->boolean('delete_flag');
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
