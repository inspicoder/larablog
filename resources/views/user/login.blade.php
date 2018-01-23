@extends('layouts.master')

@section('content')
<h3>Sign In</h3>
<form action="/login" method="POST">
		{{ csrf_field() }}
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" >
		  </div>	
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" >
		  </div>
		  <button type="submit" class="btn btn-primary">Sign In</button>
		  @include('layouts.error')
	</form>
@endsection