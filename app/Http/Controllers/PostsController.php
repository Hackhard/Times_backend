<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
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
        //
        return Post::all();
        return view('posts.index');
        //$posts= Post::all();
        //return view('posts.brat')->with('posts',$posts);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'body'=>'required',
            'c_image' => 'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('c_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('c_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('c_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('c_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        ///////////////////////////////////////////////////
        $post = new Post;
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->body=$request->input('body');
        $post->dropdown=$request->input('dropdown');
        $post->c_image = $fileNameToStore;
        //////////////////////////////////////////////////
       /* $logo=$request->file('image');
        $upload='uploads/logo';
        $filename=$logo->getClientOriginalName();
        $success=$logo->move($upload,$filename);
        $doctor->image = $filename;*/
        /////////////////////////////////////////////////
        $post->save();
        return redirect('/posts/1/brat/')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
       // $post = Post::find($id);
        //return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'body'=>'required'
        ]);
        
        if($request->hasFile('c_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('c_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('c_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('c_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        ///////////////////////////////////////////////////
        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->body=$request->input('body');
        $post->dropdown=$request->input('dropdown');
        if($request->hasFile('c_image'))
        {
            $post->c_image = $fileNameToStore;
        }

        $post->save();
        return redirect('/posts/1/brat/')->with('success','Post updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts/1/brat/')->with('success','Post deleted!');
    }
}
