<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProductStatus extends Model
{
    protected $table = 'm_product_statuses';

    protected $fillable = 'product_status_name';

    // 各販売状態には多数の商品が対応
    public function product_product_statuses()
    {
        return $this->hasMany('App\Product');
    }
}
