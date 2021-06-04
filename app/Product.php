<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\OrderDetail;

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
    protected $guarded = [
        'id',
        'regist_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
