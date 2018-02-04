<?php

namespace App\Repositories;

use App\Post;

class Posts{

	public function all(){
		$post = new Post;

		if($month = request('month')){
			$post->whereRaw("month(created_at) = '$month'");
		}

		if($year = request('year')){
			$post->whereRaw("year(created_at) = '$year'");
		}

		$post = $post->orderByRaw("created_at DESC")->get();
		
		return $post;
	}


}

?>
