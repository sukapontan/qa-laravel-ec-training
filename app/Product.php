<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'm_products';

    protected $fillable = [
        'category_id',
        'product_name',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //ユーザ情報にProduct情報を紐付ける
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function saleStatus()
    {
        return $this->belongsTo('App\SaleStatus');
    }

    public function productStatus()
    {
        return $this->belongsTo('App\ProductStatus');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
