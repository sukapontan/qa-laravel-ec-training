<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'password',
        'last_name',
        'first_name',
        'zipcode',
        'prefecture',
        'municipality',
        'address',
        'email',
        'phone_number',
        'user_classification_id',
        'company_name',
        'delete_flag',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // m_userclassificationsテーブルとのリレーション
    public function mUserClassification()
    {
        return $this->belongsTo('App\MUserClassfication');
    }

    // t_ordersテーブルとのリレーション
    public function tOrders()
    {
        return $this->hasMany('App\TOrder');
    }

    // m_productsテーブルとのリレーション
    public function mProducts()
    {
        return $this->hasMany('App\Product');
    }
}