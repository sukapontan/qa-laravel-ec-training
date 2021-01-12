<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーユーザーのセット
        DB::table('users')->insert([
            'password' => 'hoge1111',
            'last_name' => '佐藤',
            'first_name' => '一郎',
            'zipcode' => '111-1111',
            'prefecture' => '東京都',
            'municipality' => '港区',
            'address' => '虎ノ門1-1',
            'apartments' => 'LaravelQuestタワー11F',
            'email' => 'ichiro_1111@gmail.com',
            'phone_number' => '03-1234-5678',
            'user_classification_id' => '1',
            'company_name' => '株式会社LaravelQuest',
        ]);

        DB::table('users')->insert([
            'password' => 'hoge2222',
            'last_name' => '佐藤',
            'first_name' => '二郎',
            'zipcode' => '222-2222',
            'prefecture' => '東京都',
            'municipality' => '港区',
            'address' => '虎ノ門2-2',
            'apartments' => 'LaravelQuestタワー22F',
            'email' => 'jiiro_2222@gmail.com',
            'phone_number' => '03-2345-6789',
            'user_classification_id' => '2',
            'company_name' => '株式会社LaravelQuest',
        ]);
    }
}
