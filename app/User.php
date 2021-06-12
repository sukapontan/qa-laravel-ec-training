<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UserClassification;
use App\Order;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * 関連テーブル設定
     */
    protected $table = 'm_users';

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
        'apartments',
        'email',
        'phone_number',
        'user_classification_id',
        'company_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    
    
    protected $dates = [
        'deleted_at'
    ];


    public function userClassification()
    {
        return $this->belongsTo(UserClassification::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getZipcodeAttribute($value) :string
    {
        $zipHigh = substr($value, 0, 3);
        $zipLow = substr($value, 3, 4);
        return $zipHigh.'-'.$zipLow;
    }

    public function getPhoneNumberAttribute($value) :string
    {
        $telHigh = substr($value, 0, 3);
        $telMiddle = substr($value, 3, 4);
        $telLow = substr($value, 4, 4);
        return $telHigh.'-'.$telMiddle.'-'.$telLow;
    }

    /**
     * フル住所を取得
     *
     * @return string
     */
    public function getFullAddress() :string
    {
        return $this->prefecture.$this->municipality." ".$this->address.$this->apartments;
    }

    /**
     * フル氏名を取得
     *
     * @return string
     */
    public function getFullName() :string
    {
        return $this->last_name." ".$this->first_name;
    }
}
