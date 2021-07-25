<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TOrderDetail extends Model
{
    protected $table = 't_order_details';

    // timestampsの無効化
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'shipment_status_id',
        'order_detail_number',
        'order_quantity',
        'shipment_date',
    ];

    // t_ordersテーブルとのリレーション
    public function tOrder()
    {
        return $this->belongsTo('App\TOrder');
    }

    // m_shipment_statusesテーブルとのリレーション
    public function mShipmentStatuses()
    {
        return $this->belongsTo('App\MShipmentStatus');
    }

    // m_productsテーブルとのリレーション
    public function mProducts()
    {
        return $this->belongsTo('App\MProduct');
    }
}
