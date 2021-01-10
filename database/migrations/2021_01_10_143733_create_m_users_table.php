<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('password', 64); // パスワード
            $table->varchar('last_name', 16); // 姓
            $table->varchar('first_name', 16); // 名
            $table->varchar('zipcode', 8); // 郵便番号
            $table->varchar('prefecture', 16); // 都道府県
            $table->varchar('municipality', 16); // 市区町村
            $table->varchar('address', 16); // 番地
            $table->varchar('apartments', 32); // マンション、部屋番号
            $table->varchar('email', 128)->unique(); // メールアドレス
            $table->varchar('phone_number', 14)->unique(); // 電話番号
            $table->varchar('user_classification_name', 32); // ユーザー種別(要FK追加)
            $table->varchar('company_name', 128); // 会社名
            $table->char('delete_flag', 1); // deleteフラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_users');
    }
}
