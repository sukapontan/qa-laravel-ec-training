<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $table = 'm_products';

    protected $fillable = [
        'category_id',
        'product_name',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
