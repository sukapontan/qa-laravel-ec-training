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
    $this->call(
        [
            ShipmentsStatusesTableSeeder::class,
            OrdersTableSeeder::class,
            OrdersDetailsTableSeeder::class,
        ]
    );
        // 外部キーについてテーブルのシーディング子要素から親要素
    }
}
