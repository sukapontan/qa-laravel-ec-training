<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_products')->insert([
            [
                'id' => '1',
                'product_name' => 'キリマンジャロ',
                'category_id' => '1',
                'price' => '650',
                'description' => '甘酸っぱい香りとキレのある酸味',
                'sale_status_id' => '1',
                'product_status_id' => '1',
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => '1',
                'delete_flag' => '1',
            ],
            [
                'id' => '2',
                'product_name' => 'ブルーマウンテン',
                'category_id' => '1',
                'price' => '1500',
                'description' => '香り高い調和の取れたまろやかな味わい、コーヒーの王様',
                'sale_status_id' => '3',
                'product_status_id' => '2',
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => '2',
                'delete_flag' => '1',
            ],
            [
                'id' => '3',
                'product_name' => 'グアテマラ',
                'category_id' => '1',
                'price' => '600',
                'description' => '上質な酸味、ナッツクリームを思わせるコク',
                'sale_status_id' => '2',
                'product_status_id' => '1',
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => '3',
                'delete_flag' => '1',
            ],
        ]);
    }
}
