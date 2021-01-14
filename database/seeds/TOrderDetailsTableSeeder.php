<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TOrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // '注文詳細'ダミーデータのセット
        DB::table('t_order_details')->insert([
            'id' => '1',
            'products_id' => '1',
            'order_id' => '1',
            'shipment_status_id' => '1',
            'order_detail_number' => '1',
            'order_quantity' => '3',
            'shipment_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('t_order_details')->insert([
            'id' => '2',
            'products_id' => '2',
            'order_id' => '2',
            'shipment_status_id' => '2',
            'order_detail_number' => '2',
            'order_quantity' => '4',
            'shipment_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('t_order_details')->insert([
            'id' => '3',
            'products_id' => '3',
            'order_id' => '3',
            'shipment_status_id' => '1',
            'order_detail_number' => '3',
            'order_quantity' => '5',
            'shipment_date' => date('Y-m-d H:i:s'),
        ]);
    }
}
