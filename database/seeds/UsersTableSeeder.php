<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_users')->insert([
            'id' => '1',
            'last_name' => '佐藤',
            'first_name' => '隆二',
            'email' => 'sample1@gmail.com',
            'password' => bcrypt('佐藤'),
            'zipcode' => '1050011',
            'prefecture' => '東京都',
            'municipality' => '港区芝公園',
            'address' => '4-２−８',
            'apartments' => '佐藤マンション201',
            'phone_number' => '0334335111',
            'user_classification_id' => '1',
            'company_name' => '佐藤株式会社',
            ]);
        DB::table('m_users')->insert([
            'id' => '2',
            'last_name' => '鈴木',
            'first_name' => 'たかし',
            'email' => 'sample2@gmail.com',
            'password' => bcrypt('鈴木'),
            'zipcode' => '0648620',
            'prefecture' => '北海道',
            'municipality' => '札幌市中央区南9条西',
            'address' => '5-421',
            'apartments' => '鈴木マンション512',
            'phone_number' => '0115112796',
            'user_classification_id' => '2',
            'company_name' => '株式会社鈴木',
            ]);
        DB::table('m_users')->insert([
            'id' => '3',
            'last_name' => '高橋',
            'first_name' => 'ミナミ',
            'email' => 'sample3@gmail.com',
            'password' => bcrypt('高橋'),
            'zipcode' => '5780912',
            'prefecture' => '大阪府',
            'municipality' => '東大阪市角田',
            'address' => '2-4-21',
            'apartments' => 'グランヴェーニュ307',
            'phone_number' => '08058473223',
            'user_classification_id' => '3',
            'company_name' => '株式会社Minami',
            ]);
        DB::table('m_users')->insert([
            'id' => '4',
            'last_name' => '沖',
            'first_name' => '幸平',
            'email' => 'sample4@gmail.com',
            'password' => bcrypt('沖'),
            'zipcode' => '9040031',
            'prefecture' => '沖縄県',
            'municipality' => '那覇市松山',
            'address' => '1-2-1',
            'apartments' => '沖アパート201',
            'phone_number' => '09043782114',
            'user_classification_id' => '4',
            'company_name' => '沖建設合同会社',
            ]);
        DB::table('m_users')->insert([
            'id' => '5',
            'last_name' => '木元',
            'first_name' => '周平',
            'email' => 'sample5@gmail.com',
            'password' => bcrypt('木元'),
            'zipcode' => '8100022',
            'prefecture' => '福岡県',
            'municipality' => '中央区薬院',
            'address' => '1-14-5',
            'apartments' => 'MG薬院ビル7F',
            'phone_number' => '09053872832',
            'user_classification_id' => '5',
            'company_name' => 'ホープ株式会社',
            ]);
    }
}
