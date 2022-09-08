<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();

        return view('home', [
            'posts' => $posts
        ]);
    }

    public function blog(Post $post)
    {
        return view('blog', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        
        Post::create($data);

        return redirect('/');
    }
}
