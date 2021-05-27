<?php

use App\UserClassification;
use Illuminate\Database\Seeder;

class UserClassificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('consts.userclassification.names') as $name) {
            UserClassification::create([
                'user_classification_name' => $name
            ]);
        }
    }
}
