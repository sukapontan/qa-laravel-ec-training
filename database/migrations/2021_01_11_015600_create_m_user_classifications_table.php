<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 「ユーザ種別」テーブルを作成
class CreateMUserClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user_classifications', function (Blueprint $table) {
            $table->increments('id')->comment('ユーザ種別ID');
            $table->string('user_classification_name', 32)->comment('ユーザ種別名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_user_classifications');
    }
}
