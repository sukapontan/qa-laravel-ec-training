<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TOrder extends Model
{
    protected $table = 't_orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'order_date',
    ];

    // t_order_detailsテーブルとのリレーション
    public function tOrderDetails()
    {
        return $this->hasMany('App\TOrderDetail', 'order_id');
    }

    // m_usersテーブルとのリレーション
    public function mUser()
    {
        return $this->belongsTo('App\MUser', 'user_id');
    }
}
