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
            $table->bigIncrements('id')->unsigned();
            $table->string('password', 64);
            $table->string('last_name', 16);
            $table->string('first_name', 16);
            $table->string('zipcode', 8);
            $table->string('prefecture', 16);
            $table->string('municipality', 16);
            $table->string('address', 32);
            $table->string('apartments', 32);
            $table->string('email', 128);
            $table->string('phone_number', 14);
            $table->bigInteger('user_classification_id')->unsigned();
            $table->string('company_name', 128);
            $table->char('delete_flag', 1);
            $table->timestamps();

            // user_classification_idに外部キー制約
            $table->foreign('user_classification_id')->references('id')->on('m_user_classifications');
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
