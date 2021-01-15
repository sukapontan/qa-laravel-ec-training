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
            'id' => 'A',
            'category_name' => 'ストレート',
        ]);
        DB::table('m_categories')->insert([
            'id' => 'B',
            'category_name' => 'ブレンド',
        ]);
        DB::table('m_categories')->insert([
            'id' => 'C',
            'category_name' => 'その他',
        ]);
    }
}
