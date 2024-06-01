<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::latest()
        ->where('is_static',0)
        ->get();

        return view('admin.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page=null;

        return view('admin.pages.add_edit',compact('page'));
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
            'slug'=>'required|unique:pages,slug',
            'content'=>'required',
            'meta_tags'=>'nullable'
        ]);

        $slug=strtolower($request->slug);
        $slug=str_replace(' ','-',$slug);

        Page::create([
            'title'=>$request->title,
            'slug'=>$slug,
            'content'=>$request->content,
            'is_static'=>0,
            'name'=>$slug,
            'meta_tags'=>$request->meta_tags
        ]);

        return redirect()->route('admin.pages.index')->withToastSuccess('Page added successfully');
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
        $page=Page::findorfail($id);

        return view('admin.pages.add_edit',compact('page'));
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
        $request->validate([
            'title'=>'required',
            'slug'=>'required|unique:pages,slug,'.$id,
            'content'=>'required',
            'meta_tags'=>'nullable'
        ]);

        $slug=strtolower($request->slug);
        $slug=str_replace(' ','-',$slug);

        $page=Page::findorfail($id);

        $page->update([
            'title'=>$request->title,
            'slug'=>$slug,
            'content'=>$request->content,
            'meta_tags'=>$request->meta_tags
        ]);

        return redirect()->route('admin.pages.index')->withToastSuccess('Page updated successfully');
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
    }
}
