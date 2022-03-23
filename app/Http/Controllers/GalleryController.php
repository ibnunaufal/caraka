<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::all();
        return view('pages.gallery', compact('gallery', 'gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.gallery-create');
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
        $request->validate([
            'txtName'=>'required',
            'txtPrice'=> 'required',
            'txtCategory' => 'required',
            'txtImage' => 'required'
        ]);
 
        $gallery = new gallery([
            'name' => $request->get('txtName'),
            'price'=> $request->get('txtPrice'),
            'category'=> $request->get('txtCategory'),
            'image'=> $request->get('txtImage')
        ]);
 
        $gallery->save();
        return redirect('/gallery')->with('success', 'gallery has been added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
        return view('pages.gallery-view',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        return view('pages/gallery-edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
        $request->validate([
            'txtName'=>'required',
            'txtPrice'=> 'required',
            'txtCategory' => 'required',
            'txtImage' => 'required'
        ]);
 
 
        $gallery = gallery::find($id);
        $gallery->name = $request->get('txtName');
        $gallery->price = $request->get('txtPrice');
        $gallery->category = $request->get('txtCategory');
        $gallery->image = $request->get('txtImage');
 
        $gallery->update();
 
        return redirect('/admin')->with('success', 'gallery updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        $gallery->delete();
        return redirect('/admin')->with('success', 'gallery deleted successfully');
    
    }
}
