<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'title', 'tagline', 
        'address', 'email', 'phone', 
        'so_facebook', 'so_twitter', 'so_instagram'
    ];
}
