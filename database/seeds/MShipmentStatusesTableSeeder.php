<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MShipmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミー発送状態データのセット
        DB::table('m_shipment_statuses')->insert([
            'id' => '1',
            'shipment_status_name' => '発送準備中',
        ]);

        DB::table('m_shipment_statuses')->insert([
            'id' => '2',
            'shipment_status_name' => '発送済み',
        ]);

        DB::table('m_shipment_statuses')->insert([
            'id' => '3',
            'shipment_status_name' => '配送中',
        ]);
    }
}
