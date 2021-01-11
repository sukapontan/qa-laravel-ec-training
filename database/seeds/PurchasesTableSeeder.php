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
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 2,
                'purchase_price' => 1000,
                'purchase_quantity' => 10,
                'purchase_company' => '株式会社B',
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
        DB::table('t_purchases')->insert([
                'id' => 3,
                'purchase_price' => 2000,
                'purchase_quantity' => 100,
                'purchase_company' => '株式会社C',
                'order_date' => '2021-01-14 11:00:00',
                'purchase_date' => '2021-01-15 11:00:00',
        ]);
    }
}
