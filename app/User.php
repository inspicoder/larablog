<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELATION WITH OTHER MODELS

    public function post(){
        return $this->hasMany('App\Post');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    //INTERACTION WITH OTHER ENTITIES i.e MODELS

    public function publish(Post $post){
        $this->post()->save($post); //use save() method when you already have object whereas use create to pass array and create like we did with post
    }


}
