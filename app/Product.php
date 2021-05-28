<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    const CREATED_AT = 'regist_date';
    const UPDATED_AT = null;

    protected $table = 'm_products';

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
