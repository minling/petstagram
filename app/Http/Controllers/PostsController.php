<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {   
        // $posts = DB::table('posts')->get();
        $posts = Post::get();
        
        return view('posts.index', compact('posts'));
    }

    // cannot do new() for some reason
    public function create()
    {
        return view('posts.create');
    }   

    public function show($id)
    {   
        // $post = DB::table('posts')->find($id);
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    } 

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    
    public function update($id, Request $request)
    {
        
        $post = Post::find($id);

        $post->fill($request->input())->save();

        return redirect('posts');
    }


    public function store(Request $request)
    {
        $post= new Post();
        $post->create($request->all());

        return redirect()->route('posts.index');
    }

}
