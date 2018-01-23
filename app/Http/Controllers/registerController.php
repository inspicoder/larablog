<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class registerController extends Controller
{
    //

    public function create(){
    	return view('user.register');
    }

    public function store(){
    	$this->validate(request(),[
    		'name' => 'required|min:3|max:25',
    		'email' => 'required|email',
    		'password' => 'required|confirmed|min:6'
    	]);

    	$user = new User;
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));
    	$user->save();

    	Auth::login($user);

    	return redirect('/');

    }
}
