<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    public function index()
    {
        $lessons = ['My First Lesson', 'My second lesson', 'my third lesson'];
        return view('posts.index', ['lessons' => $lessons]);
    }

    // cannot do new() for some reason
    public function newPost()
    {
        return view('posts.new');
    }   

    public function show($id)
    {
        return $id;
    } 
    
}
