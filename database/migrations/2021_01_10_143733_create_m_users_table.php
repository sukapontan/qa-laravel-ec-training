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
            $table->bigIncrements('id'); // ユーザID(PK)
            $table->string('password', 64); // パスワード
            $table->string('last_name', 16); // 姓
            $table->string('first_name', 16); // 名
            $table->string('zipcode', 8); // 郵便番号
            $table->string('prefecture', 16); // 都道府県
            $table->string('municipality', 16); // 市区町村
            $table->string('address', 16); // 番地
            $table->string('apartments', 32); // マンション、部屋番号
            $table->string('email', 128); // メールアドレス
            $table->string('phone_number', 14); // 電話番号
            $table->unsignedBigInteger('user_classification_name', 32); // ユーザ種別ID(FK)
            $table->string('company_name', 128); // 会社名
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
