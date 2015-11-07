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
    public function newPost()
    {
        return view('posts.new');
    }   

    public function show($id)
    {   
        // $post = DB::table('posts')->find($id);
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    } 
    
}
