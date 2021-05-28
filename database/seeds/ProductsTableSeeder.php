<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < (47 + 1); $i++) {
            DB::table('m_products')->insert([
                'product_name' => '商品' . $i,
                'category_id' => rand(1, 7),
                'price' => 100,
                'description' => '説明' . $i,
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 10),
            ]);
        }
    }
}
