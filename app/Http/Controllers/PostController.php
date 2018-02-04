<?php

namespace App\Http\Controllers;

use App\Post;

use App\Repositories\Posts;

use Carbon\Carbon;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct(){
        
        $this->middleware('auth')->except(['index','show']); //This middleware doesn't let controllers except index and show pass through if the user is not authenticated(redirects to login route)
        
        // $archives = Post::selectRaw('year(created_at) as y, monthname(created_at) as m, count(id) as published')
        // ->groupBy('y','m')
        // ->orderByRaw('created_at DESC')
        // ->get();
        
    }

    public function index(Posts $post){

        // $posts = new Post;

        // if(request('month')){
        //     $month = request('month');
        //     $posts = $posts->whereRaw("month(created_at) = '$month'");
        // }

        // if(request('year')){
        //     $year = request('year');
        //     $posts = $posts->whereRaw("year(created_at) = '$year'");
        // }

        // $posts = $posts->orderByRaw("created_at DESC")->get();

        $posts = $post->all();

        // $p = new Post;
        // $archives = Post::archives();

    	return view('posts.index',compact('posts'));
    }

    public function show(Post $id){

        // $p = new Post;
        // $archives = $p->archives();

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
    	//Post::create(request(['title','body'])); //this is called mass assignment

        auth()->user()->publish(new Post(request(['title','body'])));

    	return redirect('/');
    }

}
