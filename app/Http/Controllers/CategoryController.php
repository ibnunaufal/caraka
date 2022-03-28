<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('pages.category-list', compact('category','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.category-create');
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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'pdf' => 'required|mimes:pdf'
        ]);
 
        // $category = new category([
        //     'name' => $request->get('txtName'),
        //     'image'=> $request->get('txtImage'),
        //     'pdf'=> $request->get('txtPdf')
        // ]);
 
        // $category->save();
        // return redirect('/category')->with('success', 'category has been added');
        $image = $request->file('image');
        $pdf = $request->file('pdf');
        $request->image = $image->getClientOriginalName();
        $request->pdf = $pdf->getClientOriginalName();
        $image->move(public_path('img/logo'), $image->getClientOriginalName());
        $pdf->move(public_path('pdf'), $pdf->getClientOriginalName());
        // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
        $path = $image->getClientOriginalName();
        $pathPdf = $pdf->getClientOriginalName();
        // time().'.'.$request->file->getClientOriginalExtension();
            
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->file->move(public_path('/images/gallert/'), $imageName);

        $post = new Category;
        $post->name = $request->get('txtName');
        $post->image = $path;
        $post->pdf = $pathPdf;
        $post->save();
        return redirect('/admin')->with('success', 'gallery has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('pages.category',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('pages.category-edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'txtName'=>'required',
        ]);
 
 
        // $category = Category::find($id);
        // $category->name = $request->get('txtName');
        // $category->image = $request->get('txtImage');
        // $category->pdf = $request->get('txtPdf');
 
        // $category->update();

        $gallery = Category::find($id);
        $gallery->name = $request->get('txtName');
        // if($request->hasFile('image')){
        if($request->image != "" && $request->image != null){
            error_log('has image.');
            $image = $request->file('image');
            $request->image = $image->getClientOriginalName();
            $image->move(public_path('img/logo'), $image->getClientOriginalName());
            // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
            $path = $image->getClientOriginalName();
            $gallery->image = $path;
        }
        if($request->pdf != "" && $request->pdf != null){
            error_log('has image.');
            $pdf = $request->file('pdf');
            $request->pdf = $pdf->getClientOriginalName();
            $pdf->move(public_path('pdf'), $pdf->getClientOriginalName());
            // $path = public_path('img/logo').'/'.$image->getClientOriginalName();
            $pathPdf = $pdf->getClientOriginalName();
            $gallery->pdf = $pathPdf;
        }
 
        $gallery->update();
 
        return redirect('/admin')->with('success', 'category updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('/admin')->with('success', 'category deleted successfully');
    }
}
