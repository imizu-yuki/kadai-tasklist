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
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'status',
    ];
}
