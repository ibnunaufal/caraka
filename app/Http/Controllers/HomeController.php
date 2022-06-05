<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = array(
            'gallery' => Gallery::latest()->take(4)->get(),
            'category'  => Category::take(4)->get()
        );
        $scroll = false;
        // return view('pages.home', compact('data', 'data'));
        return view('pages.home')
        ->with('gallery', Gallery::latest()->take(4)->get())
        ->with('category', Category::take(4)->get())
        ->with('scroll', $scroll); 
    }

    public function about()
    {
        //
        $data = array(
            'gallery' => Gallery::latest()->take(4)->get(),
            'category'  => Category::take(4)->get()
        );
        $scroll = true;
        // return view('pages.home', compact('data', 'data'));
        return view('pages.home')
        ->with('gallery', Gallery::latest()->take(4)->get())
        ->with('category', Category::take(4)->get())
        ->with('scroll', $scroll); 
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
