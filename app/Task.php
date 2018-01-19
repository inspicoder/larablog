<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   public static function scopeIncomplete($query){ //https://laravel.com/docs/5.5/eloquent#query-scopes REFER TO: Local Scopes
   		return $query->where('active',false);
   }

   public static function scopeIdbiggerthan($query,$id){ //this is called dynamic query scope, you can add your arguments only after $query
   		return $query->where('id','>=',$id);
   }
}
