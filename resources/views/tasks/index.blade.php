@extends('layoutTasks.master')
	@section('content')
		@foreach($tasks as $task)
			<a href="tasks/{{$task->id}}"><p>{{ $task->task_dsc }}</p></a>
		@endforeach
	@endsection
 	