<?php

namespace App\Http\Controllers;

use App\Models\Attorney;
use Illuminate\Http\Request;

class AdminAttorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attorneys = Attorney::latest()->get();

        return view('admin.attorneys.index', compact('attorneys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attorney=null;

        return view('admin.attorneys.add_edit',compact('attorney'));
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
            "name" => "required",
            "position" => "required",
            "image" => "required|image",
            "description" => "required",
        ]);

        Attorney::create([
            "name" => $request->name,
            "position" => $request->position,
            "description" => $request->description,
            "image_path" => $request->file('image')->store('attorneys'),
        ]);

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney added successfully');
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
        $attorney = Attorney::findorfail($id);

        return view('admin.attorneys.add_edit', compact('attorney'));
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
        $attorney = Attorney::findorfail($id);

        $request->validate([
            "name" => "required",
            "position" => "required",
            "description" => "required",
        ]);

        $attorney->update([
            "name" => $request->name,
            "position" => $request->position,
            "description" => $request->description,
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                "image" => "required|image",
            ]);

            $attorney->update([
                "image_path" => $request->file('image')->store('attorneys'),
            ]);
        }

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attorney::findorfail($id)->delete();

        return redirect()->route('admin.attorneys.index')->with('success', 'Attorney deleted successfully');
    }
}
