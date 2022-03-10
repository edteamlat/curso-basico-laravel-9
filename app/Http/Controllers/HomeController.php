<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show()
    {
        $posts = Post::get();

        return view('welcome')->with('posts', $posts);
    }
}
