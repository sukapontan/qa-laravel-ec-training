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
        $this->call(UserClassificationsTableSeeder::class); // ユーザ種別
        $this->call(ShipmentStatusesTableSeeder::class); // 発送状態
        $this->call(UsersTableSeeder::class); // ユーザ
        $this->call(OrdersTableSeeder::class); // 注文
        $this->call(OrderDetailsTableSeeder::class); // 注文詳細
    }
}
