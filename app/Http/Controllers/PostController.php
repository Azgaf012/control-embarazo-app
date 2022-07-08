<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 2)
            ->limit(10)
            ->orderBy('created_at','desc')
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        $similares = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 2)
            ->latest('id')
            ->take(4)
            ->get();

        return view('posts.show', compact('post', 'similares'));
    }
}
