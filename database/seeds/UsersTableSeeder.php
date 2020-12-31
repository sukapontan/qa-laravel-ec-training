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
            'password' => bcrypt('test1'),
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
            'password' => bcrypt('test2'),
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
            'password' => bcrypt('test3'),
            'zipcode' => '5780912',
            'prefecture' => '大阪府',
            'municipality' => '東大阪市角田',
            'address' => '2-4-21',
            'apartments' => 'グランヴェーニュ307',
            'phone_number' => '08058473223',
            'user_classification_id' => '3',
            'company_name' => '株式会社Minami',
        ]);
    }
}
