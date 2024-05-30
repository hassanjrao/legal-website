<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage=\App\Models\HomePage::first();

        return view('admin.appointment.add_edit',compact('homePage'));
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
            'appointment_title'=>'required',
            'appointment_subtitle'=>'nullable',
            'appointment_bg_image_path'=>'nullable|image',
        ]);

        $homePage=\App\Models\HomePage::first();

        if($request->hasFile('appointment_bg_image_path')){
            $appointment_bg_image_path=$request->file('appointment_bg_image_path')->store('images');
            $homePage->update(['appointment_bg_image_path'=>$appointment_bg_image_path]);
        }

        $homePage->update([
            'appointment_title'=>$request->appointment_title,
            'appointment_subtitle'=>$request->appointment_subtitle,

        ]);

        return redirect()->route('admin.appointment.index')->withToastSuccess('Appointment Section Updated Successfully');
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
