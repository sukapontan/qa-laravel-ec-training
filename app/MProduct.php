<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProduct extends Model
{
    protected $guarded = array('id');
    protected $table = 'm_products';

    // リレーションの設定(第2引数の外部キーを明示すること(テーブル名と異なるため))
    public function mCategory()
    {
        return $this->belongsTo('App\MCategory', 'category_id');
    }
}
