<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//authenticate bhayo bhane matra pass hune
    }

    public function store(Post $post){
    	$this->validate(request(),
    		[
    			'body' => 'required'
    		]
    );
    	// $comment = new \App\Comment;
    	// $comment->body = request('body');
    	// $comment->post_id = $id;
    	// $comment->save();
    	//return back(); 
    	//$post->addComment(request('body'));

        $post->addComment(request('body'));

    	return back();
    }
}
