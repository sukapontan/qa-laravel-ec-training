<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
            'm_category_name' => 'ふりかけ',
        ]);
        DB::table('m_categories')->insert([
            'id' => '2',
            'm_category_name' => '食器',
        ]);
        DB::table('m_categories')->insert([
            'id' => '3',
            'm_category_name' => '野菜',
        ]);
    }
}
