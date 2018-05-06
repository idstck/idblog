<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use Searchable;

    protected $fillable = [
        'user_id', 'category_id', 
        'slug', 'title', 'body', 'featured', 
        'status', 'published_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function searchableAs()
    {
        return 'posts_index';
    }
}
