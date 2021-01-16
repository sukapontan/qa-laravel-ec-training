<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            'id' => '1',
            'category_name' => 'ストレート',
        ]);
        DB::table('m_categories')->insert([
            'id' => '2',
            'category_name' => 'ブレンド',
        ]);
        DB::table('m_categories')->insert([
            'id' => '3',
            'category_name' => 'その他',
        ]);
    }
}
