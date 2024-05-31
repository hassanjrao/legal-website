<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CkEditorController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $file=$request->upload->store('uploads');

        return response()->json([
            'uploaded' => true,
            'url' => Storage::url($file),
        ]);
    }
}
