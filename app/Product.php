<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'm_products';

    // user_idを追加
    protected $fillable = [
        'product_name',
        'category_id',
        'price',
        'discription',
        'sale_status_id',
        'product_status_id',
        'regist_date',
        'delete_flag',
    ];

    public $timestamps = false;

    // 商品は多数の仕入れと対応
    public function purchase()
    {
        return $this->hasMany('App\Purchase');
    }

    // 商品は１つのカテゴリーに対応
    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    // 商品は１つの商品状態に対応
    public function m_product_statuses()
    {
        return $this->belongsTo('App\MProductStatus');
    }

    // 商品は１つの販売状態に対応
    public function m_sale_statues()
    {
        return $this->belongsTo('App\MSaleStatus');
    }
}
