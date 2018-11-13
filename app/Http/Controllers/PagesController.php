<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    /*public function fileUpload(Request $request)
    {
        $logo=$request->file('image');
        $upload='uploads/logo';
        $filename=$logo->getClientOriginalName();
        $success=$logo->move($upload,$filename);
        $doctor->image = $filename;
    }*/
}
