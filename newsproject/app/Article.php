<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey='id';
  

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function journalist() 
    {
        return $this->belongsTo(JournalistInfo::class);
    }
}
