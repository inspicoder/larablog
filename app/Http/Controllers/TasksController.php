<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){
    	$tasks = Task::get(); //we can use thi
		//return $tasks;
		return view('tasks.index',compact('tasks'));
		//return view('home',compact('tasks'));
    }
    public function show(Task $id){//this is called route model binding
    	//$tasks = DB::table('tasks')->find($id);
		// if($task == 'incomplete'){
		// 	$g = new Task;
		// 	return $g::incomplete()->get();
		// }

		//$tasks = \App\Task::find($id); //if you want to ignore the namespace use / infront refer to namespace basics php.net
		return view('tasks.show',[
			'task' => $id
		]);
		//return $id;

    }
}
