<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;

class Product extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'regist_date';
    const UPDATED_AT = null;

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
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
