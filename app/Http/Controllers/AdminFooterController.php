<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class AdminFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homePage = HomePage::first();

        return view('admin.footer.add_edit', compact('homePage'));
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
            'footer_title' => 'required',
            'footer_description' => 'required',
            'opening_days_title' => 'required',
            'opening_days' => 'required',
            'vacations' => 'required',
            'have_question_title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'copy_right_text' => 'required',
        ]);

        $homePage = HomePage::first();

        $homePage->update([
            'footer_title' => $request->footer_title,
            'footer_description' => $request->footer_description,
            'have_question_title' => $request->have_question_title,
            'business_hours_title' => $request->business_hours_title,
            'opening_days_title' => $request->opening_days_title,
            'opening_days' => $request->opening_days,
            'vacations_title' => $request->vacations_title,
            'vacations' => $request->vacations,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'copy_right_text' => $request->copy_right_text,
        ]);

        return redirect()->route('admin.footer.index')->with('success', 'Footer updated successfully.');
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
