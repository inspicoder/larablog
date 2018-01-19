@extends('layouts.master') 

@section('content')
<h3>Publish a story</h3>
<hr>
<form action="/posts" method="POST">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title of your blog</label>
    <input type="text" class="form-control" name="title" id="title" >
  </div>	
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="body" id="body" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  @include('layouts.error')
</form>
@endsection