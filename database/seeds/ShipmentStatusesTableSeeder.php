<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 「発送状態」テーブルのダミーデータのセット
        $shipmentStatuses = ['発送準備中', '発送済み', '配送中'];
        foreach ($shipmentStatuses as $shipmentStatus) {
            DB::table('m_shipment_statuses')->insert([
                'shipment_status_name' => $shipmentStatus,
            ]);
        };
    }
}
