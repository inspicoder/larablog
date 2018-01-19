@extends('layoutTasks.master')
@section('content')
<h3>{{ $task->task_dsc }}</h3>
<p>{{ $task->updated_at }}</p>
@endsection
