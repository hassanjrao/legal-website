<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class AdminCaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caseStudies=CaseStudy::latest()->get();

        return view('admin.case-studies.index',compact('caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caseStudy=null;

        return view('admin.case-studies.add_edit',compact('caseStudy'));
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
            "title" => "required",
            'subtitle' => 'nullable', // Add this line
            "image" => "required|image",
            "description" => "nullable",
        ]);

        CaseStudy::create([
            "title" => $request->title,
            'subtitle' => $request->subtitle, // Add this line
            "description" => $request->description,
            "image_path" => $request->file('image')->store('case-studies'),
        ]);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case Study added successfully');
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
        $caseStudy=CaseStudy::findorfail($id);

        return view('admin.case-studies.add_edit',compact('caseStudy'));
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
            "title" => "required",
            'subtitle' => 'nullable', // Add this line
            "description" => "nullable",
            'image' => 'nullable|image',
        ]);

        $caseStudy=CaseStudy::findorfail($id);

        $caseStudy->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle, // Add this line
            'description'=>$request->description,
        ]);

        if($request->hasFile('image')){
            $caseStudy->update([
                'image_path'=>$request->file('image')->store('case-studies'),
            ]);
        }

        return redirect()->route('admin.case-studies.index')->with('success', 'Case Study updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CaseStudy::findorfail($id)->delete();

        return redirect()->route('admin.case-studies.index')->with('success', 'Case Study deleted successfully');
    }
}
