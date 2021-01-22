<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{    
    protected $table = 'm_users';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
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
        'company_name',
    ];

    public function selectUserId($id)
    {
        $query = $this->select([
            'id',
            'last_name',
            'first_name',
            'zipcode',
            'prefecture',
            'municipality',
            'address',
            'apartments',
            'email',
            'phone_number',
            'company_name',
        ])->where([
            'id' => $id
        ]);

        return $query->first();
    }

    public function updateUserInfo($user)
    {
        return $this->where([
            'id' => $user['id']
        ])->update([
            'last_name' => $user['last_name'],
            'first_name' => $user['first_name'],
            'zipcode' => $user['zipcode'],
            'prefecture' => $user['prefecture'],
            'municipality' => $user['municipality'],
            'address' => $user['address'],
            'apartments' => $user['apartments'],
            'email' => $user['email'],
            'phone_number' => $user['phone_number'],
        ]);
    }

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
}
