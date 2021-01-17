<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_product_statuses')->insert([
        [
        'id' => '1',
        'product_status_name' => '浅煎り'
        ],
        [
        'id' => '2',
        'product_status_name' => '中煎り'
        ],
        [
        'id' => '3',
        'product_status_name' => '深煎り'
        ],
        ]);
    }
}
