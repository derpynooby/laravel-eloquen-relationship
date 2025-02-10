<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * 
     */
    public function index()
    {
        //get all posts from Model
        $posts = Post::latest()->get();

        //passing posts to view
        return view('posts', compact('posts'));
    }
}
