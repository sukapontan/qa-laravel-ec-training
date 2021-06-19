<?php

use Illuminate\Database\Seeder;
use App\AuthCode;
use Illuminate\Support\Str;

class AuthCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            AuthCode::create([
                'auth_code' => Str::random(15).$i,
            ]);
        }
    }
}
