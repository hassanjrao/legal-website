<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::latest()->get();

        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonial=null;

        return view('admin.testimonials.add_edit',compact('testimonial'));
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
            'name'=>'required',
            'title'=>'required',
            'image'=>'required|image',
            'description'=>'required',
        ]);

        Testimonial::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            'image_path'=>$request->file('image')->store('testimonials'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success','Testimonial added successfully');
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
        $testimonial=Testimonial::findorfail($id);

        return view('admin.testimonials.add_edit',compact('testimonial'));
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
        $testimonial=Testimonial::findorfail($id);

        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $testimonial->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image'=>'required|image',
            ]);

            $testimonial->update([
                'image_path'=>$request->file('image')->store('testimonials'),
            ]);
        }

        return redirect()->route('admin.testimonials.index')->with('success','Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::findorfail($id)->delete();

        return redirect()->route('admin.testimonials.index')->with('success','Testimonial deleted successfully');
    }
}
