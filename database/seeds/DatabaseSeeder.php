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
        $this->call(MUserClassificationTableSeeder::class);
        $this->call(MUsersTableSeeder::class);
        $this->call(TOrdersTableSeeder::class);
        $this->call(MShipmentStatusesTableSeeder::class);
        $this->call(TOrderDetailsTableSeeder::class);
    }
}
