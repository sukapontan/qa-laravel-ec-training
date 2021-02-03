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
        DB::table('m_products')->insert([
            'id' => '1',
            'product_name' => 'おかか',
            'price' => '2000',
            'description' => '快眠でる程の安らぎの味',
            'category_id' => '1',
            'sale_status_id' => '1',
            'product_status_id' => '1',
            'user_id' => '3',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '2',
            'product_name' => 'わさび',
            'price' => '5000',
            'description' => 'つんとくる味',
            'category_id' => '1',
            'sale_status_id' => '1',
            'product_status_id' => '2',
            'user_id' => '1',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '3',
            'product_name' => 'お皿',
            'price' => '300',
            'description' => '綺麗なお皿',
            'category_id' => '2',
            'sale_status_id' => '1',
            'product_status_id' => '3',
            'user_id' => '2',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '4',
            'product_name' => 'お箸',
            'price' => '2000',
            'description' => '持ちやすいお箸',
            'category_id' => '2',
            'sale_status_id' => '2',
            'product_status_id' => '4',
            'user_id' => '1',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '5',
            'product_name' => '参考書',
            'price' => '10000',
            'description' => 'スラスラわかる参考書',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '1',
            'user_id' => '3',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '6',
            'product_name' => '資料本',
            'price' => '50',
            'description' => '知識が深まる本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '7',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '8',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '9',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '10',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '11',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '13',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '14',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '15',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '16',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '17',
            'product_name' => '資料',
            'price' => '5',
            'description' => '知識本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
    }
}
