<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::latest()->get();

        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog=null;

        return view('admin.blogs.add_edit',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required|image',
            'small_description'=>'required',
            'description'=>'nullable',
        ]);

        Blog::create([
            'title'=>$request->title,
            'small_description'=>$request->small_description,
            'description'=>$request->description,
            'image_path'=>$request->file('image')->store('blogs'),
        ]);

        return redirect()->route('admin.blogs.index')->with('success','Blog added successfully');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::findorfail($id);

        return view('admin.blogs.add_edit',compact('blog'));
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
        $blog=Blog::findorfail($id);

        $blog->update([
            'title'=>$request->title,
            'small_description'=>$request->small_description,
            'description'=>$request->description,
        ]);

        if($request->hasFile('image')){
            $blog->update([
                'image_path'=>$request->file('image')->store('blogs'),
            ]);
        }

        return redirect()->route('admin.blogs.index')->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findorfail($id);

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success','Blog deleted successfully');
    }
}
