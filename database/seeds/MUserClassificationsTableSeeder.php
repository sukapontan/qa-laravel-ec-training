<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MUserClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'ユーザー種別'テーブルのダミーデータのセット
        DB::table('m_user_classifications')->insert([
            'id' => '1',
            'user_classification_name' => '個人',
        ]);

        DB::table('m_user_classifications')->insert([
            'id' => '2',
            'user_classification_name' => '法人',
        ]);

        DB::table('m_user_classifications')->insert([
            'id' => '3',
            'user_classification_name' => 'その他',
        ]);
    }
}
