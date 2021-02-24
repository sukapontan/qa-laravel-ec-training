<?php

use Illuminate\Database\Seeder;

class OrdersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_orders_details')->insert([
            [
                'products_id' => 1,
                'order_id' => 1,
                'shipment_status_id' => 1,
                'order_detail_number' => '162500',
                'order_quantity' => 1,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 2,
                'order_id' => 2,
                'shipment_status_id' => 2,
                'order_detail_number' => '162501',
                'order_quantity' => 2,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 1,
                'order_id' => 3,
                'shipment_status_id' => 3,
                'order_detail_number' => '162502',
                'order_quantity' => 3,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 1,
                'order_id' => 4,
                'shipment_status_id' => 3,
                'order_detail_number' => '162503',
                'order_quantity' => 3,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 1,
                'order_id' => 5,
                'shipment_status_id' => 3,
                'order_detail_number' => '162504',
                'order_quantity' => 3,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 3,
                'order_id' => 6,
                'shipment_status_id' => 3,
                'order_detail_number' => '162500',
                'order_quantity' => 2,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 4,
                'order_id' => 1,
                'shipment_status_id' => 3,
                'order_detail_number' => '162500',
                'order_quantity' => 4,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
            [
                'products_id' => 2,
                'order_id' => 1,
                'shipment_status_id' => 3,
                'order_detail_number' => '162500',
                'order_quantity' => 7,
                'shipment_date' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
