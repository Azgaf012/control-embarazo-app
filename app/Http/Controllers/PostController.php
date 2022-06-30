<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::where('status',2)->limit(10)->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
}
