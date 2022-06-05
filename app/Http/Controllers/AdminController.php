<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $e = $request->get('type');
        if (Auth::check()) {
            if($e == ""){
                return view('pages.admin')
                ->with('type',$e)
                ->with('gallerySize', count(Gallery::all()))
                ->with('gallery', Gallery::latest()->take(5)->get())
                ->with('category', Category::get())
                ->with('categorySize', count(Category::all()))
                ->with('userSize', count(User::all())); 
            }else if($e == "cat"){
                return view('pages.admin')
                ->with('type',$e)
                ->with('category', Category::paginate(5)); 
            }else if($e == "gal"){
                return view('pages.admin')
                ->with('type',$e)
                ->with('category', Category::all())
                ->with('gallery', Gallery::paginate(5)); 
            }else if($e == "user"){
                return view('pages.admin')
                ->with('type',$e)
                ->with('users', User::paginate(5)); 
            }
        }else{
            return redirect('login');
        }
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        // return view('pages.create');
        $type = $request->get('type');
        if($type == "gal"){
            // dashboard
            $gallery = Gallery::where('id',$request->get('id'))->first();
            // $gallery = $request->get('id');
            $category = Category::all();
            $type = $request->get('type');
            return view('pages.admin-edit')
            ->with('type', $type)
            ->with('gallery', $gallery)
            ->with('category', $category);
        }else if($type == "cat"){
            // category
            $category = Category::where('id',$request->get('id'))->first();
            $type = $request->get('type');
            return view('pages.admin-edit')
            ->with('type', $type)
            ->with('category', $category);
        }else if($type == "user"){
            // user
            // $users = User::paginate(5, ['*'], 'category');
            $users = User::paginate(5)->withQueryString();
            return view('pages.admin-edit')
            ->with('users', $users)
            ->with('type', $type);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
