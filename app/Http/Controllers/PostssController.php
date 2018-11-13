<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        return view('posts.brat')->with('posts',$posts);
    }
    public function show($id)
    {
        //
       $post = Post::find($id);
        return view('posts.show')->with('post',$post);
      //  return $id;
    }
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'body'=>'required'
        ]);
        
        ///////////////////////////////////////////////////
        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->body=$request->input('body');
        $post->dropdown=$request->input('dropdown');

        $post->save();
        return redirect('/posts/1/brat/')->with('success','Post updated!');
        
    }
}
