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
    }
}
