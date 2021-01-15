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
            'id' => '1',
            'purchase_price' => '300',
            'purchase_quantity' => '100',
            'purchase_company' => '株式会社AA珈琲',
            'order_date' => '2021-01-16 12:00:00',
            'purchase_date' => '2021-1-17 15:00:00',
            'product_id' => '1',
        ]);
        DB::table('t_purchases')->insert([
            'id' => '2',
            'purchase_price' => '700',
            'purchase_quantity' => '30',
            'purchase_company' => '株式会社BB珈琲',
            'order_date' => '2021-01-16 12:00:00',
            'purchase_date' => '2021-1-17 16:00:00',
            'product_id' => '2',
        ]);
        DB::table('t_purchases')->insert([
            'id' => '3',
            'purchase_price' => '250',
            'purchase_quantity' => '70',
            'purchase_company' => '株式会社AA珈琲',
            'order_date' => '2021-01-16 12:00:00',
            'purchase_date' => '2021-1-17 15:00:00',
            'product_id' => '3',
        ]);
    }
}
