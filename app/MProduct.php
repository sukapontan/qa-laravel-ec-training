<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProduct extends Model
{
    protected $guarded = array('id');
    protected $table = 'm_products';

    // リレーションの設定
    public function mCategory()
    {
        return $this->belongsTo(MCategory::class, 'category_id', 'id');
        // return $this->belongsTo('App\MCategory');
    }
}
