<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ユーザー関連と注文関連のSeederを実行(順番に注意)
        $this->call(MUserClassificationsTableSeeder::class); // ユーザ種別
        $this->call(MShipmentStatusesTableSeeder::class); // 発送状態
        $this->call(MUsersTableSeeder::class); // ユーザ
        $this->call(TOrdersTableSeeder::class); // 注文
        $this->call(TOrderDetailsTableSeeder::class); // 注文詳細
    }
}
