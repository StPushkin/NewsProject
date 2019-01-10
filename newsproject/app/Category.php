<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey='id';

    public function articles() 
    {
       return $this->belongsToMany(Article::class);
    }
}
