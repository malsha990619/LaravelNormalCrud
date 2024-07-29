<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    //
    public function store(Request $request){

        Post::create([
            'user_id' => Auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
           
        ]);
        return back();
    }

    public function show($postId){
        $post= Post::findOrFail($postId);
        return view('postsShow', compact('post'));
    }

    public function allPosts(){
        $posts= Post::where('user_id', Auth::user()->id)->get();
        return view('allPost',compact('posts'));
    }

    public function edit($postId){
        $post= Post::findOrFail($postId);
        return view('edit', compact('post'));
    }
    public function update($postId, Request $request)
    {
        Post::findOrFail($postId)->update($request->all());
        return redirect(route('posts.all')); 
    }

    public function delete($postId){
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all')); 

    }
    
}
