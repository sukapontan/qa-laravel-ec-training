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

    public function userClassification()
    {
        return $this->belongsTo(UserClassification::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
