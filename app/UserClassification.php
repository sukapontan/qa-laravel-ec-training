<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserClassification extends Model
{
    /**
     * 関連テーブル設定
     */
    protected $table = 'm_user_classifications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_classification_name',
    ];

    public function user()
    {
        $this->hasMany(User::class);
    }
}
