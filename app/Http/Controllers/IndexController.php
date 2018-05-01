<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function setting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = $this->setting();
        $posts = Post::where('status', 1);
        return view('welcome', compact('setting', 'posts'));
    }
}
