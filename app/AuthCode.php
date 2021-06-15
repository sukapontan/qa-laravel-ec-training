<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthCode extends Model
{
    /**
     * 関連テーブル設定
     */
    protected $table = 'm_auth_codes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'auth_code',
    ];
}
