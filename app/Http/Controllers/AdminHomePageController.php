<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage = \App\Models\HomePage::first();

        return view('admin.home_page.add_edit', compact('homePage'));
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
            'hero_welcome' => 'required',
            'hero_title' => 'required',
            'hero_button_text' => 'required',
            'hero_bg_image_path' => 'nullable|image',
            'hero_description' => 'nullable',
            'services_title' => 'required',
            'services_description' => 'nullable',
            'footer_description' => 'nullable',
            'opening_days' => 'nullable',
            'vacations' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'copy_right_text' => 'nullable',

        ]);

        $homePage= \App\Models\HomePage::first();

        if($request->hasFile('hero_bg_image_path')){
            $hero_bg_image_path = $request->file('hero_bg_image_path')->store('images');
            $homePage->update(['hero_bg_image_path'=>$hero_bg_image_path]);
        }


        if($homePage){
            $homePage->update([
                'hero_welcome'=>$request->hero_welcome,
                'hero_title'=>$request->hero_title,
                'hero_button_text'=>$request->hero_button_text,
                'hero_description'=>$request->hero_description,
                'services_title'=>$request->services_title,
                'services_description'=>$request->services_description,
                'footer_description'=>$request->footer_description,
                'opening_days'=>$request->opening_days,
                'vacations'=>$request->vacations,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'copy_right_text'=>$request->copy_right_text,
            ]);
        }



        return redirect()->back()->withToastSuccess('Home Page Updated Successfully');


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
