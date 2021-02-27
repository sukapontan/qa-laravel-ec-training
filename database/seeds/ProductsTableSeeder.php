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
            'description' => '快眠できる程の安らぎの味',
            'category_id' => '1',
            'sale_status_id' => '1',
            'product_status_id' => '1',
            'user_id' => '3',
            'delete_flag' => '1',
        ]);
        DB::table('m_products')->insert([
            'id' => '2',
            'product_name' => '最高級生わさび',
            'price' => '5000',
            'description' => '伊豆天城産の最高級生わさび。甘みと辛みを味わえる。',
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
            'product_name' => '数学参考書',
            'price' => '5500',
            'description' => 'この一冊で中学受験の数学はOK',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '1',
            'user_id' => '3',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '6',
            'product_name' => '資料本',
            'price' => '1680',
            'description' => '知識が深まる本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '7',
            'product_name' => '英和辞典',
            'price' => '11000',
            'description' => '英語の授業に最適の本',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '8',
            'product_name' => '松葉ガニ',
            'price' => '9500',
            'description' => '島根県から直送の最高級ガニ',
            'category_id' => '1',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '9',
            'product_name' => '汁椀',
            'price' => '3300',
            'description' => '京都伝統の老舗汁惋。最高の逸品',
            'category_id' => '2',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '10',
            'product_name' => 'コピーライティング',
            'price' => '5500',
            'description' => '人は、どのようにするとあなたの商品に興味を持つのか',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '11',
            'product_name' => '哲学書',
            'price' => '3500',
            'description' => 'あなたの日常生活の悩みの解消ができます。',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '12',
            'product_name' => '[数量限定]タンブラー',
            'price' => '10000',
            'description' => '純金でコーティングされた、手作りタンブラー',
            'category_id' => '2',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '13',
            'product_name' => '生ガキ',
            'price' => '3500',
            'description' => '生食、鍋、揚げ物全ての用途で使える新鮮な牡蠣',
            'category_id' => '1',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '14',
            'product_name' => '大人気おかず',
            'price' => '1200',
            'description' => '今日のおかずの一品にいかがでしょう。',
            'category_id' => '3',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '15',
            'product_name' => 'カップラーメン',
            'price' => '5300',
            'description' => 'ご当地の名産ラーメンを詰め込みました。',
            'category_id' => '1',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
        DB::table('m_products')->insert([
            'id' => '16',
            'product_name' => '割り箸[100膳]',
            'price' => '1500',
            'description' => 'ポリ袋入り、竹で作られた箸',
            'category_id' => '2',
            'sale_status_id' => '2',
            'product_status_id' => '2',
            'user_id' => '2',
            'delete_flag' => '0',
        ]);
    }
}
