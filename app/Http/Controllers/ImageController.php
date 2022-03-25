<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploadfile');
    }
    public function store(Request $request)
    {
        //
        $request->validate([
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        if($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images';
            $file->move($destinationPath,$fileName);
            return view('admin');
        }
    }
}
