<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MUserClassification extends Model
{
    // m_usersテーブルとのリレーション
    public function mUsers()
    {
        return $this->hasMany('App\MUser');
    }
}
