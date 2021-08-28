<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MShipmentStatus extends Model
{
    protected $table = 'm_shipment_statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipment_status_name',
    ];

    // t_order_detailsテーブルとのリレーション
    public function tOrderDetails()
    {
        return $this->hasMany('App\TOrderDetail');
    }
}
