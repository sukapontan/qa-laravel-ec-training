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
            [
                'product_name' => 'サーロインステーキ',
                'category_id' => 1,
                'price' => 5000,
                'description' => '食べたらとろける',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '青魚3点セット（アジ、サバ、イワシ） 各５匹ずつ',
                'category_id' => 2,
                'price' => 2000,
                'description' => '旬の青魚を用意しました。',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => 'プルプルりんぶどう✖️3',
                'category_id' => 3,
                'price' => 2500,
                'description' => '糖度10でとても甘い商品になっています',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '野菜詰め合わせ',
                'category_id' => 4,
                'price' => 1500,
                'description' => '旬の野菜が詰まった商品です',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '探求学園ビール✖️50',
                'category_id' => 5,
                'price' => 6000,
                'description' => 'laravelに詳しくなるビールとなっています',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '甘辛福神漬け',
                'category_id' => 6,
                'price' => 1200,
                'description' => '甘いと辛いが融合した商品になっています',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => 'おっとっと100袋',
                'category_id' => 7,
                'price' => 4000,
                'description' => 'おっとっとの詰め合わせになっています',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '松坂牛1kg',
                'category_id' => 1,
                'price' => 100000,
                'description' => 'たらふく食べてみませんか？',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => 'アンコウ1匹',
                'category_id' => 2,
                'price' => 20000,
                'description' => '今しか買えない。いつ買うの？今でしょ',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '果汁100%りんごジュース10瓶',
                'category_id' => 3,
                'price' => 6500,
                'description' => '旬のりんごをジュースにした商品です',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '糖度10%トマト',
                'category_id' => 4,
                'price' => 2000,
                'description' => 'ここでしか買えない糖度10%トマト',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => 'はちみつジュース',
                'category_id' => 5,
                'price' => 1000,
                'description' => '新感覚のはちみつジュース',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => 'たくあん1kg',
                'category_id' => 6,
                'price' => 3000,
                'description' => '冷たく、シャキシャキで美味しさ',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '超デカポップコーン',
                'category_id' => 7,
                'price' => 1000,
                'description' => 'ここでしか買えない超デカサイズのポップコーン',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '神戸牛寿司100貫',
                'category_id' => 1,
                'price' => 15000,
                'description' => '三上屋店主自慢の１品',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
            [
                'product_name' => '中トロブロック1kg',
                'category_id' => 2,
                'price' => 20000,
                'description' => '刺身、ステーキ、鍋　どれに使っても美味しい1品',
                'sale_status_id' => rand(1, 3),
                'product_status_id' => rand(1, 3),
                'regist_date' => date('Y-m-d H:i:s'),
                'user_id' => rand(1, 9),
            ],
        ]);
    }
}
