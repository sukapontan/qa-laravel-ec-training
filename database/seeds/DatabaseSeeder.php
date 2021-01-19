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
        // 外部キーについてテーブルのシーディング子要素から親要素
        $this->call([
            UsersClassificationsTableSeeder::class,
            UsersTableSeeder::class,
            SalesStatusesTableSeeder::class,
            OrdersTableSeeder::class,
            ShipmentsStatusesTableSeeder::class,
            OrdersDetailsTableSeeder::class,
            ProductsTableSeeder::class,
            PurchasesTableSeeder::class,
        ]);
    }
}
