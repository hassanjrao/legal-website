<?php

namespace App\Http\Controllers;

use App\Models\PracticeArea;
use Illuminate\Http\Request;

class AdminPracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practiceAreas = PracticeArea::latest()->get();

        return view('admin.practice-areas.index', compact('practiceAreas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $practiceArea=null;

        return view('admin.practice-areas.add_edit',compact('practiceArea'));
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
            'description'=>'nullable',
        ]);

        PracticeArea::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image_path'=>$request->file('image')->store('practice-areas'),
        ]);


        return redirect()->route('admin.practice-areas.index')->with('success','Practice Area added successfully');

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
        $practiceArea=PracticeArea::find($id);

        return view('admin.practice-areas.add_edit',compact('practiceArea'));
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
        $practiceArea=PracticeArea::findorfail($id);

        $practiceArea->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        if($request->hasFile('image')){
            $practiceArea->update([
                'image_path'=>$request->file('image')->store('practice-areas'),
            ]);
        }

        return redirect()->route('admin.practice-areas.index')->with('success','Practice Area updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PracticeArea::findorfail($id)->delete();

        return redirect()->route('admin.practice-areas.index')->with('success','Practice Area deleted successfully');
    }
}
