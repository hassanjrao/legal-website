<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();

        return view('admin.settings.index',compact('setting'));
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
            'app_name'=>'required',
            'mail_driver'=>'required',
            'mail_host'=>'required',
            'mail_port'=>'required',
            'mail_username'=>'required',
            'mail_password'=>'required',
            'mail_encryption'=>'nullable',
            'mail_from_address'=>'nullable',
            'mail_from_name'=>'nullable',
        ]);

        $setting=Setting::first();



        $setting->update([
            'app_name'=>$request->app_name,
            'mail_driver'=>$request->mail_driver,
            'mail_host'=>$request->mail_host,
            'mail_port'=>$request->mail_port,
            'mail_username'=>$request->mail_username,
            'mail_password'=>$request->mail_password,
            'mail_encryption'=>$request->mail_encryption,
            'mail_from_address'=>$request->mail_from_address,
            'mail_from_name'=>$request->mail_from_name,
        ]);

        if($setting->logo){
            $setting->update([
                'logo_path'=>$request->file('logo')->store('settings')
            ]);


        }

        if($setting->favicon){
            $setting->update([
                'favicon_path'=>$request->file('favicon')->store('settings')
            ]);
        }

        return back()->withToastSuccess('Settings updated successfully');
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
