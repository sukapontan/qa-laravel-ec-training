<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = 'm_categories';

    protected $fillable = [
        'category_name',
    ];

    public static function pickUpColumn()
    {
        $categories = Category::pluck('category_name', 'id');
        return $categories;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
