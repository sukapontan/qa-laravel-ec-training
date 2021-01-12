<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミー注文データのセット
        DB::table('t_orders')->insert([
            'id' => '1',
            'order_date' => '2021-01-12 12:48:35',
        ]);

        DB::table('t_orders')->insert([
            'id' => '2',
            'order_date' => '2021-01-13 08:11:24',
        ]);
    }
}
