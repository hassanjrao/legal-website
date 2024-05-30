<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=AboutUs::first();

        return view('admin.about.add_edit',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
            'image_path'=>'required|image',
            'title'=>'required',
            'subtitle'=>'nullable',
            'description'=>'nullable',
            'experience'=>'nullable',
            'video_path'=>'nullable',
        ]);

        $about=AboutUs::first();

        $about->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'strip_text'=>$request->experience,
        ]);

        if($request->hasFile('image_path')){
            $about->update([
                'image_path'=>$request->file('image_path')->store('images'),
            ]);
        }

        if($request->hasFile('video_path')){
            $about->update([
                'video_path'=>$request->file('video_path')->store('videos'),
            ]);
        }

        return redirect()->route('admin.about.index')->withToastSuccess('About Us Updated Successfully');
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
