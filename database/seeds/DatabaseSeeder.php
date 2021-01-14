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
        $this->call(MUsersTableSeeder::class);
        $this->call(MUserClassificationsTableSeeder::class);
        $this->call(TOrdersTableSeeder::class);
        $this->call(TOrderDetailsTableSeeder::class);
        $this->call(MShipmentStatusesTableSeeder::class);
    }
}
