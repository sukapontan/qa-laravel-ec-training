<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id')->unsigned();
            $table->string('user_classification_name', 32);
            $table->timestamps();

            // user_classification_idに外部キー制約
            // $table->foreign('id')->references('user_classification_id')->on('m_users');
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
