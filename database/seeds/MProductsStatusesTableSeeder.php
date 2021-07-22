<?php

use Illuminate\Database\Seeder;

class MProductsStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_products_statuses')->insert([
            'product_status_name' => '新品・未使用',
        ]);
        DB::table('m_products_statuses')->insert([
            'product_status_name' => '傷あり',
        ]);
        DB::table('m_products_statuses')->insert([
            'product_status_name' => '状態が悪い',
        ]);
    }
}
