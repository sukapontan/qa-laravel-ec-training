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
            $table->increments('id');
            $table->string('product_name', 64);
            $table->integer('price')->unsigned();
            $table->string('description', 256);
            $table->integer('category_id')->unsigned();
            $table->integer('sale_status_id')->unsigned();
            $table->integer('product_status_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamp('regist_date')->nullable();
            $table->char('delete_flag', 1);
            $table->foreign('user_id')
                  ->references('id')
                  ->on('m_users')
                  ->onDelete('cascade');
            $table->foreign('product_status_id')
                  ->references('id')
                  ->on('m_products_statuses')
                  ->onDelete('cascade');
            $table->foreign('sale_status_id')
                  ->references('id')
                  ->on('m_sales_statuses')
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
