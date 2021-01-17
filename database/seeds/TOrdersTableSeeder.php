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
        // 「注文」テーブルのダミーデータのセット
        DB::table('t_orders')->insert([
            'id' => '1',
            'user_id' => '1',
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('t_orders')->insert([
            'id' => '2',
            'user_id' => '2',
            'order_date' => date('Y-m-d H:i:s'),
        ]);

        DB::table('t_orders')->insert([
            'id' => '3',
            'user_id' => '3',
            'order_date' => date('Y-m-d H:i:s'),
        ]);
    }
}
