<?php

use Illuminate\Database\Seeder;
use App\AuthCode;

class AuthCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthCode::create([
            'auth_code' => 'aaaaaaaaaaaaaaaa',
        ]);
    }
}
