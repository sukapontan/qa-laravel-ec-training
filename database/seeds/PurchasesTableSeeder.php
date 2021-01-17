<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_purchases')->insert([
        [
        'id' => '1',
        'purchase_price' => '300',
        'purchase_quantity' => '100',
        'purchase_company' => '株式会社AA珈琲',
        'order_date' => date('Y-m-d H:i:s'),
        'purchase_date' => date('Y-m-d H:i:s'),
        'product_id' => '1',
        ],
        [
        'id' => '2',
        'purchase_price' => '700',
        'purchase_quantity' => '30',
        'purchase_company' => '株式会社BB珈琲',
        'order_date' => date('Y-m-d H:i:s'),
        'purchase_date' => date('Y-m-d H:i:s'),
        'product_id' => '2',
        ],
        [
        'id' => '3',
        'purchase_price' => '250',
        'purchase_quantity' => '70',
        'purchase_company' => '株式会社AA珈琲',
        'order_date' => date('Y-m-d H:i:s'),
        'purchase_date' => date('Y-m-d H:i:s'),
        'product_id' => '3',
        ],
        ]);
    }
}
