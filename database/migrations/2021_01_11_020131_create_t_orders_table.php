<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 注文テーブルを作成
class CreateTOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_orders', function (Blueprint $table) {
            $table->increments('id')->comment('注文ID'); // PK
            $table->unsignedInteger('user_id')->comment('ユーザID'); // FK
            $table->timestamps('ordar_date'); // 注文日

            $table->foreign('user_id')->reference('id')->on('m_users'); // ユーザIDの外部キー制約
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_orders');
    }
}
