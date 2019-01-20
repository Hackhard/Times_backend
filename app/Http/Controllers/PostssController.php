<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostssController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show','index']]);
    }
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
            'body'=>'required',
            //'image'=>'image|nullable|1999'
        ]);
        /*if($request->hasFile('image')){
            //get filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/cover_images',$fileNameToStore);
    }
    else
    {
        $fileNameToStore ='noimage.jpg';
    }/** */
        ///////////////////////////////////////////////////
        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->body=$request->input('body');
        $post->dropdown=$request->input('dropdown');
       // $post->image = $fileNameToStore;

        $post->save();
        return redirect('/posts/1/brat/')->with('success','Post updated!');
        
    }
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete;
        return redirect('/posts/1/brat/')->with('success','Post deleted!');
    }
}
