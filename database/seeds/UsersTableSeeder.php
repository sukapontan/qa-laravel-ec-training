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

            'last_name' => 'sample1',
            'first_name' => 'sample1',
            'email' => 'sample1@gmail.com',
            'password' => bcrypt('sample1'),
            'zipcode' => '105-0011',
            // 'prefecture' => '東京都',
            // 'municipality' => '港区芝公園',
            // 'address' => '４丁目２−８',
            // 'apartments' => '東京タワー',
            // 'phone_number' => '03-3433-5111',
            // 'company_name' => 'Tokyo Tower',

        ]);
    }
}
