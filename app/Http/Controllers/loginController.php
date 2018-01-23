<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

	public function create(){
		return view('user.login');
	}

    public function store(){
        if(!Auth::attempt(request(['email','password']))){
           return back()->withErrors([
                'message' => 'username or password error'
           ]);
        }

        return redirect('/');

    }
    
    public function logout(){
    	if(Auth::check()){
    		Auth::logout();
    	}
    	return redirect()->route('home');
    }

}
