<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
        'age', 'sex', 'birthday','family','hometown','dislike','beento','comment',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
