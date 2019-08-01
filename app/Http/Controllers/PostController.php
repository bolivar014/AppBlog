<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index')->with(compact('posts'));
    }

    public function show($id)
    {
        // dd($id);
        $post = Post::find($id);
        //  dd($post);
        return view('posts.show')->with(compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $post = new Post();
        $post->posts = $request->input('txtPost');
        $post->image = $request->input('txtImage');
        $post->save();

        
        $posts = Post::paginate(5);
        return view('posts.index')->with(compact('posts'));
    }

    //
    public function destroy($id)
    {
        $post =  Post::find($id);
        $post->delete();

        return redirect('/posts');
    }
}
