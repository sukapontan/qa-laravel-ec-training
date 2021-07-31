<?php

use Illuminate\Database\Seeder;

class MCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            'category_name' => '家具',
        ]);
        DB::table('m_categories')->insert([
            'category_name' => '楽器',
        ]);
        DB::table('m_categories')->insert([
            'category_name' => '衣類',
        ]);
        DB::table('m_categories')->insert([
            'category_name' => '家電',
        ]);
        DB::table('m_categories')->insert([
            'category_name' => '本',
        ]);
    }
}
