<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'm_categories';

    protected $fillable = ['category_name'];

    // 各カテゴリーには多数の商品が対応
    public function product_categories()
    {
        return $this->hasMany('App\Product');
    }

    //m_categoriesテーブルから::pluckでcategory_nameとidを抽出し、$categoriesに返す関数を作る
    public function getLists()
    {
        $categories = Category::pluck('category_name', 'id');

        return $categories;
    }
}
