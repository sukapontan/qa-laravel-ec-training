<?php

use Illuminate\Database\Seeder;

class UsersClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_users_classifications')->insert([
            'id' => '1',
            'user_classification_name' => '出品者',
            ]);
        DB::table('m_users_classifications')->insert([
            'id' => '2',
            'user_classification_name' => '購入者',
            ]);
        DB::table('m_users_classifications')->insert([
            'id' => '3',
            'user_classification_name' => 'ゲスト',
            ]);
        DB::table('m_users_classifications')->insert([
            'id' => '4',
            'user_classification_name' => '管理者',
            ]);
        DB::table('m_users_classifications')->insert([
            'id' => '5',
            'user_classification_name' => '開発者',
            ]);
    }
}
