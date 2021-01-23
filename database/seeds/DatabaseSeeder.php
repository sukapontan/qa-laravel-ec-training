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
        // ユーザー関連と注文関連のSeederを実行(Migrateと同じ順序とすること)
        $this->call(UserClassificationsTableSeeder::class); // ユーザ種別
        $this->call(UsersTableSeeder::class); // ユーザ
        $this->call(OrdersTableSeeder::class); // 注文
        $this->call(ShipmentStatusesTableSeeder::class); // 発送状態
        $this->call(CategoriesTableSeeder::class); // カテゴリー
        $this->call(SaleStatusesTableSeeder::class); // 販売状態
        $this->call(ProductStatusesTableSeeder::class); // 商品状態
        $this->call(ProductsTableSeeder::class); // 商品
        $this->call(PurchasesTableSeeder::class); // 仕入れ
        $this->call(OrderDetailsTableSeeder::class); // 注文詳細
    }
}
