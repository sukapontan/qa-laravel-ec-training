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
            $table->increments('id')->comment('ユーザID'); // PK
            $table->string('password', 64)->comment('パスワード');
            $table->string('last_name', 16)->comment('姓');
            $table->string('first_name', 16)->comment('名');
            $table->string('zipcode', 8)->comment('郵便番号');
            $table->string('prefecture', 16)->comment('都道府県');
            $table->string('municipality', 16)->comment('市区町村');
            $table->string('address', 16)->comment('番地');
            $table->string('apartments', 32)->comment('マンション、部屋番号');
            $table->string('email', 128)->comment('メールアドレス');
            $table->string('phone_number', 14)->comment('電話番号');
            $table->unsignedInteger('user_classification_name', 32)->comment('ユーザ種別ID'); // FK
            $table->string('company_name', 128)->comment('会社名');
            $table->char('delete_flag', 1)->comment('deleteフラグ');
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
