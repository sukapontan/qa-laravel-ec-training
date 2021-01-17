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
        // 「ユーザ種別」テーブルのダミーデータのセット
        DB::table('m_user_classifications')->insert([
            'id' => '1',
            'user_classification_name' => '出品者',
        ]);

        DB::table('m_user_classifications')->insert([
            'id' => '2',
            'user_classification_name' => '購入者',
        ]);

        DB::table('m_user_classifications')->insert([
            'id' => '3',
            'user_classification_name' => '管理者',
        ]);
    }
}
