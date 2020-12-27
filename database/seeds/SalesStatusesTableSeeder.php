<?php

use Illuminate\Database\Seeder;

class SalesStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sales_statuses')->insert([
            'id' => '1',
            'sale_status_name' => '在庫有',
            ]);
        DB::table('m_sales_statuses')->insert([
            'id' => '2',
            'sale_status_name' => '在庫無',
            ]);
        DB::table('m_sales_statuses')->insert([
            'id' => '3',
            'sale_status_name' => '入荷待ち',
            ]);
    }
}
