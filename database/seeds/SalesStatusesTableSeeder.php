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
            'sale_status_name' => '在庫あり',
        ]);
    }
}
