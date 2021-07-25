<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MCategoriesTableSeeder::class);
        $this->call(MProductStatusesTableSeeder::class);
        $this->call(MSaleStatusesTableSeeder::class);
        $this->call(MProductsTableSeeder::class);
        $this->call(TPurchasesTableSeeder::class);
        $this->call(MUserClassificationTableSeeder::class);
        $this->call(MUsersTableSeeder::class);
    }
}
