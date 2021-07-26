<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSaleStatus extends Model
{
    protected $table = 'm_sale_statuses';

    protected $fillable = 'sale_status_name';

    //各商品状態には多数の商品が存在
    public function product_sale_statuses()
    {
        return $this->hasMany('App\Product');
    }
}
