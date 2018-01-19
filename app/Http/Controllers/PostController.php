<?php

namespace App\Http\Controllers;

use App\Post;

use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
    	//$posts = Post::all();
    	$posts = Post::orderBy('created_at','desc')->get();
    	return view('posts.index',compact('posts'));
    }

    public function show(Post $id){
    	return view('posts.show',compact('id'));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	// $posts = new \App\Post;
    	// $posts->title = request('title');
    	// $posts->body = request('body');
    	// $posts->save();

    	$this->validate(
    		request(),
    		[
	    		'title' => 'required',
	    		'body' => 'required'
    		]

    	);

    	//validations passed
    	Post::create(request(['title','body'])); //this is called mass assignment

    	return redirect('/');
    }

}
