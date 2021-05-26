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
        for ($i = 0; $i < 10; $i++) {
            DB::table('t_purchases')->insert([
                'purchase_price' => 100,
                'purchase_quntity' => ($i + 1),
                'purchase_company' => '会社' . ((string)$i + 1),
                'order_date' => date('Y-m-d H:i:s'),
                'purchase_date' => date('Y-m-d H:i:s'),
                'product_id' => ($i + 1),
            ]);
        }
    }
}
