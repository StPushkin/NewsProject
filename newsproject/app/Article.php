<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey='id';
    protected $fillable = ['article_title', 'article_text', 'article_category_id','article_journalist_id'];

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
