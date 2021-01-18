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
            'category_id' => '1',
            'price' => '2000',
            'description' => '快眠でる程の安らぎの味',
            'user_id' => '3',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '2',
            'product_name' => 'わさび',
            'category_id' => '2',
            'price' => '5000',
            'description' => 'つんとくる味',
            'user_id' => '1',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '3',
            'product_name' => 'とまと',
            'category_id' => '1',
            'price' => '300',
            'description' => '甘いトマト',
            'user_id' => '2',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '4',
            'product_name' => 'しいたけ',
            'category_id' => '5',
            'price' => '2000',
            'description' => '食べ応えあり',
            'user_id' => '1',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '5',
            'product_name' => 'お茶漬け',
            'category_id' => '1',
            'price' => '10000',
            'description' => 'さらっと食べれる',
            'user_id' => '3',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '6',
            'product_name' => 'ほうれんそう',
            'category_id' => '2',
            'price' => '50',
            'description' => '力の源',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
    }
}
