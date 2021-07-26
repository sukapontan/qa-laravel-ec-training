<?php

use Illuminate\Database\Seeder;

class MShipmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_shipment_statuses')->insert([
            'shipment_status_name' => '準備中',
        ]);
        DB::table('m_shipment_statuses')->insert([
            'shipment_status_name' => '発送済',
        ]);
        DB::table('m_shipment_statuses')->insert([
            'shipment_status_name' => '入荷待ち',
        ]);
        DB::table('m_shipment_statuses')->insert([
            'shipment_status_name' => 'キャンセル',
        ]);
    }
}
