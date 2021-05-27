<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('m_categories')->insert([
                'category_name' => 'カテゴリー' . ((string)$i + 1),
            ]);
        }
    }
}
