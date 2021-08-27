<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
 * リレーション
 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
