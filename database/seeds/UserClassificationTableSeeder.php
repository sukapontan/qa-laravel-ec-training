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
        $userClassficationNames = [
            '購入者',
            '出品者',
            '管理者',
        ];

        foreach ($userClassficationNames as $userClassficationName) {
            UserClassification::create([
                'user_classification_name' => $userClassficationName
            ]);
        }
    }
}
