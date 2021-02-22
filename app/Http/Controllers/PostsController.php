<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    public function index ()
    {
        $posts = Post::paginate(3);

        return view('posts.index', compact(['posts']));
    }
    
    public function store (Request $request)
    {
        $this->validate($request, [
            'body' => ['required']
        ]);

        // Post::create([
        //     'body' => $request->body;
        //     'user_id => auth()->id()
        // ])

        // dd($request->user());

        $request->user()->posts()->create($request->only('body'));

        return back();

    }
    
}
