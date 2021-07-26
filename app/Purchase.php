<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 't_purchases';

    protected $fillable = [
        'purchase_price', 'purchase_quantity', 'purchase_company', 'order_date', 'purchase_date', 'product_id',
    ];

    public $timestamps = false;

    // 仕入れには１つの商品が対応
    public function product_purchase()
    {
        return $this->belongsTo('App\Product');
    }
}
