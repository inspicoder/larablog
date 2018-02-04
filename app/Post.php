<?php

namespace App;

use App\Comment;

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

    public static function archives(){
        $archives = self::selectRaw('year(created_at) as y, month(created_at) as m, monthname(created_at) as month_name, count(id) as published')
        ->groupBy('y','m', 'month_name')
        ->orderByRaw('created_at DESC')
        ->get();

        return $archives;

    }
    
    //RELATIONSHIPS WITH OTHER MODELS

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    //INTERACTION WITH OTHER ENTITIES

    public function addComment($body){
        //return $this->comments()->create(['body' => $body]);
        $comment = new Comment;
        $comment->body = $body;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $this->id;
        $comment->save();
    
    }

}
