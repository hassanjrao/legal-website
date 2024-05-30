<?php

namespace App\Http\Controllers;

use App\Models\AboutUsTab;
use Illuminate\Http\Request;

class AdminAboutTabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabs=AboutUsTab::latest()->get();


        return view('admin.about-tabs.index',compact('tabs'));
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
        $tab=AboutUsTab::find($id);

        return view('admin.about-tabs.add_edit',compact('tab'));
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
        $aboutTab=AboutUsTab::findorfail($id);

        $aboutTab->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.about-tabs.index')->withToastSuccess('Tab Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutTab=AboutUsTab::findorfail($id);

        $aboutTab->delete();

        return redirect()->route('admin.about-tabs.index')->withToastSuccess('Tab Deleted Successfully');
    }
}
