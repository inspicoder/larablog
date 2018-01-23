<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['body','post_id'];
    public function post(){
    	return $this->belongsTo('App\Post');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function human_readable_date(){
		return Carbon::instance($this->created_at)->diffForHumans();//no need for this as laravel automatically returns a carbon instance in timestamp datatype
    }
}
