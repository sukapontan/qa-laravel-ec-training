<?php

use Illuminate\Database\Seeder;

class ProductsStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_products_statuses')->insert([
            'id' => '1',
            'product_status_name' => '販売済み',
        ]);
        DB::table('m_products_statuses')->insert([
            'id' => '2',
            'product_status_name' => '未販売',
        ]);
    }
}
