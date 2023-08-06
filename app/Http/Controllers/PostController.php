<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myposts = Post::all();
        return view('posts.show',compact('myposts'));
        // return view('posts.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            // 'created_by' => 'required|unique:posts|max:255',
            // 'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->created_by = $request->by;
        $post->save();
        return redirect('posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
       $post = Post::find($post->id);
        $post->title = $request->title;
        $post->created_by = $request->by;
        $post->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post->id);
        $post->delete();
        return redirect('posts');
    }
}
