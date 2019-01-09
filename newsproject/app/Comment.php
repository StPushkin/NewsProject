<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey='id';

    public function articles() 
    {
       return $this->hasMany(Article::class);
    }

    public function users() 
    {
       return $this->hasMany(UserInfo::class);
    }
}
