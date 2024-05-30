<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::latest()->get();

        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service=null;

        return view('admin.services.add_edit',compact('service'));
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
            'image_path'=>'required|image',
            'title'=>'required',
            'description'=>'required'
        ]);

        Service::create([
            'image_path'=>$request->file('image_path')->store('images'),
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.services.index')->withToastSuccess('Service Added Successfully');
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
        $service=Service::findOrFail($id);

        return view('admin.services.add_edit',compact('service'));
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
        $service=Service::findOrFail($id);

        $request->validate([
            'image_path'=>'nullable|image',
            'title'=>'required',
            'description'=>'required'
        ]);

        $service->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        if($request->hasFile('image_path')){
            $service->update(['image_path'=>$request->file('image_path')->store('images')]);
        }

        return redirect()->route('admin.services.index')->withToastSuccess('Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::findOrFail($id);

        $service->delete();

        return redirect()->route('admin.services.index')->withToastSuccess('Service Deleted Successfully');
    }
}
