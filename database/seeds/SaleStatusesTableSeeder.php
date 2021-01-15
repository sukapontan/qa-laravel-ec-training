<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sale_statuses')->insert([
            'id' => '1',
            'sale_status_name' => '販売中'
        ]);
        DB::table('m_sale_statuses')->insert([
            'id' => '2',
            'sale_status_name' => '入荷待ち'
        ]);
        DB::table('m_sale_statuses')->insert([
            'id' => '3',
            'sale_status_name' => '受注販売'
        ]);
    }
}
