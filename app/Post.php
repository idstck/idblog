<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 
        'slug', 'title', 'body', 'featured', 
        'status', 'published_at'
    ];
}
