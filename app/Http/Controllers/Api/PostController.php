<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
     return Post::all();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function store($id,$request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->created_by = $request->by;
        $post->save();

    }

    public function update($id,$request)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->created_by = $request->by;
        $post->save();
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

 
 
}
