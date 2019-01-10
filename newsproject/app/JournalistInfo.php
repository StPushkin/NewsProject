<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalistInfo extends Model
{
    protected $table = 'journalist';
    protected $primaryKey='id';

    public function article() 
    {
       return $this->hasMany(Article::class);
    }
}
