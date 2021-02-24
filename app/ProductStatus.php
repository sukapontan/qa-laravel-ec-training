<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    protected $table = 'm_products_statuses';

    public function productStatus()
    {
        return $this->belongsTo('App\Product');
    }
}
