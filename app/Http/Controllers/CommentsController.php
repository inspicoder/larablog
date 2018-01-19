<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class CommentsController extends Controller
{
    //
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
    	$post->addComment(request('body'));
    	return back();
    }
}
