<?php

use Illuminate\Database\Seeder;

class MSaleStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sale_statuses')->insert([
            'sale_status_name' => '入荷未定',
        ]);
        DB::table('m_sale_statuses')->insert([
            'sale_status_name' => '売り切れ',
        ]);
        DB::table('m_sale_statuses')->insert([
            'sale_status_name' => '入荷待ち',
        ]);
        DB::table('m_sale_statuses')->insert([
            'sale_status_name' => '販売中',
        ]);
        DB::table('m_sale_statuses')->insert([
            'sale_status_name' => '発売前',
        ]);

    }
}
