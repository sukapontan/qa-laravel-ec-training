<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'ユーザ'のダミーデータのセット
        DB::table('m_users')->insert([
            'id' => '1',
            'password' => bcrypt('password'),
            'last_name' => '佐藤',
            'first_name' => '一郎',
            'zipcode' => '111-1111',
            'prefecture' => '東京都',
            'municipality' => '港区',
            'address' => '虎ノ門1-1',
            'apartments' => 'LaravelQuestタワー11F',
            'email' => Str::random(10) . '@gmail.com',
            'phone_number' => '0312345678',
            'user_classification_id' => '1',
            'company_name' => '株式会社LaravelQuest',
        ]);

        DB::table('m_users')->insert([
            'id' => '2',
            'password' => bcrypt('password'),
            'last_name' => '佐藤',
            'first_name' => '二郎',
            'zipcode' => '222-2222',
            'prefecture' => '東京都',
            'municipality' => '港区',
            'address' => '虎ノ門1-1',
            'apartments' => 'LaravelQuestタワー22F',
            'email' => Str::random(10) . '@gmail.com',
            'phone_number' => '0323456789',
            'user_classification_id' => '2',
            'company_name' => '株式会社LaravelQuest',
        ]);

        DB::table('m_users')->insert([
            'id' => '3',
            'password' => bcrypt('password'),
            'last_name' => '佐藤',
            'first_name' => '三郎',
            'zipcode' => '333-3333',
            'prefecture' => '東京都',
            'municipality' => '港区',
            'address' => '虎ノ門2-2',
            'apartments' => 'LaravelQuestタワー33F',
            'email' => Str::random(10) . '@gmail.com',
            'phone_number' => '0301234567',
            'user_classification_id' => '2',
            'company_name' => '株式会社LaravelQuest',
        ]);
    }
}
