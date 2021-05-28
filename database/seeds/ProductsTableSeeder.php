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
        for ($i = 0; $i < 10; $i++) {
            DB::table('m_products')->insert([
                'product_name' => '商品' . ((string)$i + 1),
                'category_id' => rand(1, 10),
                'price' => 100,
                'description' => '説明' . ((string)$i + 1),
                'sale_status_id' => rand(1, 2),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
                'delete_flag' => 1,
            ]);
        }
    }
}
