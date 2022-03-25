<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('pages.login');
    } 
    public function register()
    {
        return view('pages.register');
    } 
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin');
        }else{
            return view('pages.login');
        }
    }

    public function actionlogin(Request $request)
    {
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];

        // if (Auth::Attempt($data)) {
        //     return redirect('admin');
        // }else{
        //     Session::flash('error', 'Email atau Password Salah');
        //     return redirect('login');
        // }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("admin");
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registration()
    {
        return view('pages.register');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        // 'password' => $data['password'],
        'password' => Hash::make($data['password'])
      ]);
    }    
}
