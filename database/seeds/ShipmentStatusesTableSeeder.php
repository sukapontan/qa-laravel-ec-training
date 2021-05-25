<?php

use App\ShipmentStatus;
use Illuminate\Database\Seeder;

class ShipmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipmentStatuses = ['発送前', '発送中', '発送済み'];

        foreach ($shipmentStatuses as $shipmentStatus) {
            ShipmentStatus::create([
                'shipment_status_name' => $shipmentStatus,
            ]);
        }
    }
}
