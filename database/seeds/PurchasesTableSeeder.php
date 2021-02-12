<?php

use Illuminate\Database\Seeder;

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
                'id' => 1,
                'purchase_price' => 9000,
                'purchase_quantity' => 2,
                'purchase_company' => '株式会社A',
                'product_id' => 1,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 2,
                'purchase_price' => 1000,
                'purchase_quantity' => 10,
                'purchase_company' => '株式会社B',
                'product_id' => 2,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 3,
                'purchase_price' => 2000,
                'purchase_quantity' => 50,
                'purchase_company' => '株式会社C',
                'product_id' => 3,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 4,
                'purchase_price' => 5000,
                'purchase_quantity' => 100,
                'purchase_company' => '株式会社D',
                'product_id' => 4,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 5,
                'purchase_price' => 200,
                'purchase_quantity' => 10,
                'purchase_company' => '株式会社E',
                'product_id' => 5,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 6,
                'purchase_price' => 700,
                'purchase_quantity' => 30,
                'purchase_company' => '株式会社G',
                'product_id' => 6,
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
    }
}
