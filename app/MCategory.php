<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCategory extends Model
{
    protected $guarded = array('id');
    protected $table = 'm_categories';

    // リレーションの設定
    public function mProducts()
    {
        return $this->hasMany(MProduct::class);
        // dd($this->hasMany(MProduct::class));
        // return $this->hasMany('App\MProduct');
    }
}
