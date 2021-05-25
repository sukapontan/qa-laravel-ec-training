<?php

use App\Order;
use App\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::select('m_users.id')
            ->join('m_user_classifications', 'm_users.user_classification_id', 'm_user_classifications.id')
            ->where('m_user_classifications.user_classification_name', '購入者')
            ->get();

        foreach ($users as $user) {
            Order::create(
                [
                    'user_id' => $user->id,
                    'order_date' => date('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
