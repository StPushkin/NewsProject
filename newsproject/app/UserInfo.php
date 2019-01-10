<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user';
    protected $primaryKey='id';

    public function comments() 
    {
       return $this->hasMany(Comment::class);
    }
}
