<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::paginate(1);

        return view('posts.index')->with(compact('posts'));
    }

    public function show($id)
    {
        // dd($id);
        $post = Post::find($id);
        //  dd($post);
        return view('posts.show')->with(compact('post'));
    }
}
