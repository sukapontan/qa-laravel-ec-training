<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    /**
     * 関連テーブル設定
     */
    protected $table = 'm_products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'category_id',
        'price',
        'description',
        'sale_status_id',
        'product_status_id',
        'regist_date',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
