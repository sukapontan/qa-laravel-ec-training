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
            'category_name' => '食品',
        ]);
        DB::table('m_categories')->insert([
            'id' => '2',
            'category_name' => '食器類',
        ]);
        DB::table('m_categories')->insert([
            'id' => '3',
            'category_name' => '書籍',
        ]);
    }
}
