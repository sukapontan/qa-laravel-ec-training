<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// 「発送状態」テーブルを作成
class CreateMShipmentStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_shipment_statuses', function (Blueprint $table) {
            $table->increments('id')->comment('発送状態ID');
            $table->string('shipment_status_name', 32)->comment('発送状態名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_shipment_statuses');
    }
}
