<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 「ユーザ種別」テーブルのダミーデータのセット
        $userClassications = ['出品者', '購入者', '管理者'];
        foreach ($userClassications as $userClassication) {
            DB::table('m_user_classifications')->insert([
            'user_classification_name' => $userClassication,
            ]);
        };
    }
}
