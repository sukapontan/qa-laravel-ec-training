<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'm_products';
    // protected $table = ['m_products', 'm_categories', 'm_products_statuses', 'm_sales_statuses'];

    // user_idを追加
    protected $fillable = [
        'product_name', 'category_id', 'price', 'discription', 'sale_status_id', 'product_status_id', 'regist_date', 'delete_flag',
    ];

    public $timestamps = false;
}
