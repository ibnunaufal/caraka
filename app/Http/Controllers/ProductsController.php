<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        
    }
    public function show(Student $student)
    {
        //
        return view('pages.view',compact('student'));
    }
}
