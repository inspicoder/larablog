<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model
{
    //
    //protected $guarded = []; //sets fields in the model that can not be mass assigned i.e refer to laravel documentation
    protected $fillable = ['title','body']; //allows fields that can be mass assigned
    
    public function formatted_date(){
    	return Carbon::instance($this->created_at)->toFormattedDateString();
    }

    public function human_readable_date(){
    	return Carbon::instance($this->created_at)->diffForHumans();
    }
    
    //RELATIONSHIPS WITH OTHER MODELS

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    public function addComment($body){
    	return $this->comments()->create(['body' => $body]);
    }
}
