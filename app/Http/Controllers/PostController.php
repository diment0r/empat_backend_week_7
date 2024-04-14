<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::findOrFail($id);
        return view('post.details', ['post' => $post]);
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
        return redirect('/');
    }
    
    public function create() {
        return view('post.create');
    }

    public function createPost(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:80',
            'description' => 'required|string|max:1000',
        ]);

        Post::create($validated);
        return redirect('post/create');
    }
}
