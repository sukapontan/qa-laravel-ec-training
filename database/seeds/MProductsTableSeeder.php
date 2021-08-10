<?php

use App\Product;
use Illuminate\Database\Seeder;

class MProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Product::class, 10)->create();

        $faker = Faker\Factory::create('ja_JP');

        DB::table('m_products')->insert([
            'product_name' => '学問のすすめ',
            'category_id' => '1',
            'price' => '1000',
            'discription' => '福沢諭吉著。 明治五～九年（一八七二‐七六）刊。 人間の自由平等、独立の思想に基づいて、従来の封建道徳を鋭く批判し、実用的学問の必要を説いたもの。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'お金の大学',
            'category_id' => '1',
            'price' => '1500',
            'discription' => 'YouTuber両学長著。65万部突破! いま一番売れてる「お金の勉強」本。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => '金持ち父さん貧乏父さん',
            'category_id' => '1',
            'price' => '1760',
            'discription' => 'アメリカの金持ちが教えてくれるお金の哲学 (単行本)',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'バビロン大富豪の教え',
            'category_id' => '1',
            'price' => '1782',
            'discription' => '「お金」と「幸せ」を生み出す五つの黄金法則',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'トランペット自宅練習セット',
            'category_id' => '2',
            'price' => '49800',
            'discription' => '【おうちですぐ吹ける！】 J.Michael TR-200 トランペット 自宅練習セット ',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => '電子ドラム セット',
            'category_id' => '2',
            'price' => '49999',
            'discription' => '自宅練習 折りたたみ式 MIDI機能 225種類音色 30デモ曲 ドラムスローン/ヘッドホン/スティック付き',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'カスタネット',
            'category_id' => '2',
            'price' => '352',
            'discription' => '木製、赤青コンビのカスタネットです。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'アコースティックギター',
            'category_id' => '2',
            'price' => '190080',
            'discription' => 'Gibson ギブソン J-45 Standard アコースティックギター エレアコ ハードケース付',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'ショートダウンジャケット',
            'category_id' => '3',
            'price' => '238700',
            'discription' => 'ダウンジャケットのように温かくレザージャケットのようにかっちりとしたデザイン',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'スリム フィット メッシュ ポロシャツ',
            'category_id' => '3',
            'price' => '17600',
            'discription' => '1972年の登場以来、多くの類似製品の出現にもゆるがないアメリカンスタイルをキープしてきた確固たる定番ポロシャツ',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'ザ ノースフェイス　パーカー',
            'category_id' => '3',
            'price' => '13200',
            'discription' => '速乾性に優れたポリエステルを使用した、プルオーバースウェットパーカ。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'CRIMIE(クライミー)ストレッチ スリム ストレート ジーンズ',
            'category_id' => '3',
            'price' => '29920',
            'discription' => '様々なスタイリングを想定して、汎用性の高い洗練されたスリムシルエットを磨き上げた""BORN FREE""ブラックデニムパンツ。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'Canon デジタル一眼レフカメラ EOS Kiss X90',
            'category_id' => '4',
            'price' => '59770',
            'discription' => '約2410万画素のAPS-CサイズCMOSセンサーで高画質',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'Nikon デジタル一眼レフカメラ D3500',
            'category_id' => '4',
            'price' => '61499',
            'discription' => '有効画素数2416万画素:高画質・キレイに撮影',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'ソニー SONY ミラーレス一眼 α6000',
            'category_id' => '4',
            'price' => '82472',
            'discription' => '世界最速0.06秒のAFスピード。有効約2430万画素APS-Cセンサーの圧倒的な高画質',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'PENTAX デジタル一眼レフカメラ',
            'category_id' => '4',
            'price' => '74980',
            'discription' => '【これぞ アウトドアスペック】レンズも含むシステム全体で防塵・防滴構造なので、システム全体でハードなシーンに対応。',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'ルンバ s9+',
            'category_id' => '5',
            'price' => '186760',
            'discription' => '自動ゴミ収集 アレルゲン99%捕捉 パワフルな吸引力 隅や角まで',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'アイリスオーヤマ ドラム式洗濯機',
            'category_id' => '5',
            'price' => '108000',
            'discription' => '乾燥機能付き 8kg 温水洗浄機能 乾燥3kg 幅595mm',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);

        DB::table('m_products')->insert([
            'product_name' => 'ソニー 55V型 液晶 テレビ',
            'category_id' => '5',
            'price' => '108900',
            'discription' => 'Google TV（TM）機能搭載。GoogleのAIが、あなたにぴったりのコンテンツをおすすめ。さらにGoogle アシスタントを使えば、音声でコンテンツの検索やテレビの操作も可能',
            'sale_status_id' => '4',
            'product_status_id' => '1',
            'regist_date' => $faker->dateTimeBetween('-2 week', 'now'),
            'delete_flag' => 0,
        ]);
    }
}
