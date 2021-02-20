<?php

use Illuminate\Database\Seeder;

class ShipmentsStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_shipments_statuses')->insert([
            [
                'shipment_status_name' => '発送完了',
            ],
            [
                'shipment_status_name' => '発送中',
            ],
            [
                'shipment_status_name' => '発送準備中',
            ],
        ]);
    }
}